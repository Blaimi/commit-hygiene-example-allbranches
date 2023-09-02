#!/usr/bin/env bash
git push github ${1}:feature/deliveryAddress --
git push gitlab ${1}:feature/deliveryAddress
#git push gerrit ${1}:refs/for/main
