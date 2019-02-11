var express = require('express');
var app = express()
var cookieParser = require('cookie-parser');
var escape = require('escape-html');
var serialize = require('node-serialize');
var randstr = require("randomstring");
var n = require('random-number')
var p = n.generator({min:1,max:1000,integer:true})
app.get('/', function(req,res,next){
	res.render('index', {title: 'Callestasia'});
});

app.post('/', function(req,res,next){
	console.log(req.body.name);
	console.log(req.body.instansi);
	var acak = '{"undian":"'+p()+'","token":"'+randstr.generate()+'"}';
	var data = '{"peserta":"'+req.body.name+'","kota":"'+req.body.kota+'","instansi":"'+req.body.instansi+'"}'
	var cook = new Buffer.from(data).toString('base64');
	var ciik = new Buffer.from(acak).toString('base64');
	res.cookie('final', cook, {
            maxAge: 900000,
            httpOnly: true
        });
	res.cookie('attend', ciik, {
		maxAge: 900000,
        httpOnly: true
	});
	res.redirect('/flag');
});


app.get('/flag', function(req,res,next){
	console.log('succes');
        if(req.cookies.final){
        	var str = new Buffer(req.cookies.final, 'base64').toString();
        	var obj = serialize.unserialize(str);
        	var trs = new Buffer(req.cookies.attend, 'base64').toString();
        	var jbo = serialize.unserialize(trs);
        	if(obj.peserta && jbo.token){
        		var nama = obj.peserta;
        		var kota = obj.kota;
        		var ints = obj.instansi;
        		var undn = jbo.undian;
        		var tokn = jbo.token;
        		res.render('flag', {nama: nama, kota: kota, ints: ints, undian: undn, token: tokn});
        	}
        }else{
        	res.redirect('/');
        }	
});

app.get('/del', function(req,res){
	res.clearCookie('final');
	res.clearCookie('attend');
	res.redirect('/');
});
module.exports = app;
