# Path to Oh My Fish install.
#set -gx OMF_PATH "/home/kenn/.local/share/omf"

# Customize Oh My Fish configuration path.
#set -gx OMF_CONFIG "/home/kenn/.config/omf"

# Load oh-my-fish configuration.
#source $OMF_PATH/init.fish


function fish_prompt
    ~/powerline-shell.py $status --shell bare ^/dev/null
end

#set -g theme_title_display_proces yes
#
