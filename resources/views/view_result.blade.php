<center>
    <h1>
        SEARCH PAGE....<br><br>
    </h1>
    <table style='border:1px solid;'>
    <tr>
        <td style='border:1px solid;'>Product Name</td>
        <td style='border:1px solid;'>Product Code</td>
        <td style='border:1px solid;'>Product Price</td>
    </tr>
    <tr>
        <td style='border:1px solid;'>{{$p->Pname}}</td>
        <td style='border:1px solid;'>{{$p->Pcode}}</td>
        <td style='border:1px solid;'>{{$p->Pprice}}</td>
    </tr>
</table>
<br><br><br><br>    <a href='{{route("home")}}'>HOME</a>

</center>