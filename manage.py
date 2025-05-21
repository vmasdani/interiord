#!/usr/bin/python3

import json
import subprocess
import argparse

parser = argparse.ArgumentParser()
parser.add_argument("action")
parser.add_argument("env")

args = parser.parse_args()

env_f= open('./config.json')
env = json.loads(env_f.read())
env_f.close()

def replace(src, dst):
    fsrc = open(src)
    src = fsrc.read()
    fsrc.close()

    
    for (k) in env[args.env]:
        src = src.replace(f'#{k}', env[args.env][k])
    
    fdst = open(dst, 'w+')
    dst =fdst.write(src)
    fdst.close()


replace('./.env.template','./.env')

if args.action == "run":
    steps = [
        ("yarn build --mode development", "./admin"),
        ("cp -r ./admin/dist/assets ./public", "./"),
        ("cp -r ./admin/dist/vite.svg ./admin/dist/index.html ./public", "./"),
        ("php artisan serve --host=0.0.0.0", "./"),

    ]
    # print(steps)
    for s, cwd in steps:
        print(s)
        subprocess.run(s, cwd=cwd, shell=True)
        
elif args.action == "build":
        steps = [
            ("yarn build", "./admin"),
            ("cp -r ./admin/dist/assets ./public", "./"),
            ("cp -r ./admin/dist/vite.svg ./admin/dist/index.html ./public", "./"),
            ("mv storage .. && mv admin .. && mv .env ..", '.'),
            ("zip -r release.zip . --exclude=storage/* --exclude=admin/* --exclude=.env", '.'),
            ("mv ../storage . && mv ../admin . && mv ../.env .", '.'),
        ]
        # print(steps)
        for s, cwd in steps:
            print(s)
            subprocess.run(s, cwd=cwd, shell=True)
        