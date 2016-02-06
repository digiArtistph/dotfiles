function tmxn --argument-names 'opt'
    if test -n "$opt"
        tmux new -s $opt
    else
        tmux new -s "WORK"
    end
end
