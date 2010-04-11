awk '{ print  }' *.txt | sort | uniq -c | sort -nr | less
