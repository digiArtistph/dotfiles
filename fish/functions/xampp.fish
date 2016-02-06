# starst xampp services
function xampp --argument-names 'opt'
    if test -n "$opt"
        if test "$opt" = "start"
            sudo /opt/lampp/lampp start
        else
            sudo /opt/lampp/lampp stop
        end
    else
        echo Please provide a valid parameter, you moron!
    end
end
