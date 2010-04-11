awk '{ print $1 }' *.txt | sort | uniq -c | sort -nr | less
