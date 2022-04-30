<center><h1>INSERT DATA</h1></center>
<form method="get" action="{{route('storedb')}}">
    @csrf
    Product Name<br>
    <input type="text" name="p_name">

    <br><br>Product Code<br>
    <input type='text' name='p_code'>
    
    
    <br><br>Product Price<br>
    <input type='text' name='p_price'>
    
    <br><br><input type='submit' name='p_submit'>
</form>