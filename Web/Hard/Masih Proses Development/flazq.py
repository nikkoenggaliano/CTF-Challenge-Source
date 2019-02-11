from things import flag as a
from random import choice as d
from flask import Flask as f, request as g, session as h, abort as i, jsonify as j
from urlparse import urlparse as b
from string import ascii_lowercase as e
from hashlib import md5 as c
from time import time as k

l = "Under Construction look /jhack"
app = f(__name__)
app.secret_key = c("JHack{Its_Not_A_Flag_Dont_Submit_IT!!!}" + a).hexdigest()
e = list(e)

@app.before_request
def a_():
    if 'y' not in h:
        y = lambda x: ''.join(d(e) for _ in range(x))
        u = b('e%s://%s:%s@%s/%s?%s#%s' % (y(4), y(5), y(6), y(7), y(8), y(9), y(10)))
        for f_ in u._fields:
            if f_ == '':
                continue
            h[f_] =  u.__getattribute__(f_) + d(e)
        h[c(u.geturl()).hexdigest()] = 'hhh'
        h['y'] = k()
    if g.endpoint not in ['_a', '_b']:
        ep = g.endpoint
        if not ep:
            ep = d(e[:6])
        a_ = g.args.get(ep)
        if not a_ or c(a_).hexdigest() not in h or k()-h['y'] > 3:
            return 'Wooooopssssssssssssssssssssssssssss baby!'
        else:
            return a

@app.after_request
def b_(r_):
    r_.content_type = 'video/mp4'
    return r_

@app.route('/')
def _a():
    return l

@app.route('/jhack')
def _b():
    return open(__file__, 'r').read()

if __name__ == '__main__':
    app.run(debug=False, host='127.0.0.1', port=9991)