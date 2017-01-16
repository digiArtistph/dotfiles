#!/bin/bash

# creates Php session
tmux new -d -s Php ;
tmux split-window -t Php -v -p 50

# selects the first pane
tmux select-pane -t Php -t 1
tmux send-keys -t Php 'cd ~/sandbox/officescape' Enter
# tmux rename-window -t Php 'Angular'

# splits pane horizontally
tmux split-window -t Php -h -p 50
tmux select-pane -t Php -t 2
tmux send-keys -t Php 'cd ~/sandbox/officescape' Enter 'pserve' Enter

# selects the second pane
tmux select-pane -t Php -t 3
tmux send-keys -t Php 'cd ~/sandbox/officescape' Enter 'gulp test' Enter


# creates another session - Ng
tmux new -d -s Ng ;

tmux send-keys -t Ng 'cd ~/sandbox/officescape' Enter 'vim' Enter
tmux rename-window -t Ng 'Angular'
tmux new-window -t Ng 
tmux select-window -t Ng -t 2
tmux rename-window -t Ng 'Laravel'
tmux send-keys -t Ng 'cd ~/sites/pencilcase' Enter 'vim' Enter
tmux new-window -t Ng
tmux select-window -t Ng -t 3
tmux rename-window -t Ng 'terminal'
tmux select-window -t Ng -t 1

# opens new terminal for each tmux session
gnome-terminal -e "tmux attach-session -d -t Php"
gnome-terminal -e "tmux attach-session -d -t Ng"

exit
