<form method='post' action='/update/change/1'>
    @csrf
    Product id<br>
    <input type='text' name='p_id' value="{{$p->id}}">
    <br>
    Product Name<br>
    <input type='text' name='p_name' value="{{$p->Pname}}">
    <br>
    Product Code<br>
    <input type='text' name='p_code' value="{{$p->Pcode}}">
    <br>
    Product Price<br>
    <input type='text' name='p_price' value="{{$p->Pprice}}">
    <br>
    <input type='submit' name='submit'>
</form>