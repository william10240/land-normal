#!/usr/bin/env python3
# -*- coding: utf-8 -*-

' update html'
import os
import re
import shutil
from io import StringIO
from urllib import request

__author__ = 'SunCoder'

BASEURL = "http://127.0.0.1:82/"
BASE_PATH = os.path.join(os.getcwd(), "html")
RESOURCES = os.path.join(BASE_PATH, "resources")
RESOURCES_BASE = os.path.join(os.getcwd(), "resources", "v1.0", "dist")

print(BASEURL)
print(BASE_PATH)
print(RESOURCES)
print(RESOURCES_BASE)
ALLPAGE = {
    'index',
    't1',
    't2',
    't3',
    't4',
    't5',
    't6',
}


def getpage(url):
    try:
        req = request.urlopen(url)
        html = req.read()
        return html
    except Exception as e:
        print(e)
        return False


def fsave(fname, data, isbyte=False):
    try:
        dirnamea = os.path.join(BASE_PATH, os.path.dirname(fname))
        if not os.path.exists(dirnamea):
            os.makedirs(dirnamea)

        filename = os.path.join(BASE_PATH, fname)
        if os.path.exists(filename):
            os.remove(filename)

        print(' 更新文件：', filename)

        if isbyte:
            with open(filename, 'wb') as op:
                op.write(data)
        else:
            with open(filename, 'w', encoding='utf8') as op:
                data = data.decode("utf8")
                op.write(data)
        return True
    except Exception as e:
        print(e)
        return False


if __name__ == '__main__':

    for url in ALLPAGE:
        name = url + '.html'
        print(' 开始更新：', name)
        furl = BASEURL + url + '.php?d=1&s=1&h=1'
        print(' 获取数据：', furl)
        html = getpage(furl)
        res = fsave(name, html)
        if res:
            print(' 更新完成：', name, '\r\n')
        else:
            print(' 更新失败：', name, '\r\n')

    # 移动静态资源
    shutil.copy("favicon.ico", BASE_PATH)
    if(os.path.exists(RESOURCES)):
        shutil.rmtree(RESOURCES)
    shutil.copytree(RESOURCES_BASE, RESOURCES)
