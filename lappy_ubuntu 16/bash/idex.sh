#!/bin/bash

if tmux has-session -t Php ; then
   tmux kill-session -t Php 
fi

if tmux has-session -t Ng ; then
   tmux kill-session -t Ng
fi
