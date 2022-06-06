<form action="22.php?x=10" method="post">
    Name: <input type="text" name="nm" value=""><br>
    Age: <input type="number" name="age" value=""><br>
    <button>Submit</button>
</form>

<a href='22.php?nm=suman&age=55'>click here</a>

<!-- 
    GET:
    advantage:
        1. url dependant page, which is useful for sharing, bookmarking etc
    disadvantage:
        1. data visible in url, less secure
        2. it makes page url messy and complex to read/remind
        3. it has limit of passing data via url

    POST:
    disadvantage:
        1. No url dependant page, so can't share, bookmark etc
    advantage:
        1. data hidden from url,  secure
        2. it makes page url clean and easy to read/remind
        3. it has bigger limit of passing data via url
 -->