<form method='get' action='/start'>
    @csrf
    Enter USER NAME:
    <input type='text' name='uname'>
    <br>
    Enter PASSWORD:
    <input type='password' name='upass'>
    <br>
    <input type='submit' name='submit'>
</form>