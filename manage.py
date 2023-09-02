#!/usr/bin/python3

import subprocess
import argparse

parser = argparse.ArgumentParser()
parser.add_argument("action")

args = parser.parse_args()


if args.action == "run":
    steps = [
        ("yarn build --mode development", "./admin"),
        ("cp -r ./admin/dist/assets ./public", "./"),
        ("cp -r ./admin/dist/vite.svg ./admin/dist/index.html ./public", "./"),
        ("php artisan serve", "./"),

    ]
    # print(steps)
    for s, cwd in steps:
        print(s)
        subprocess.run(s, cwd=cwd, shell=True)
        
elif args.action == "build":
    pass
