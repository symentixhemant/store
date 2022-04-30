Enter ID:
<form method='get' action='/filter_view/result'>
    @csrf
    <input type='text' name='id'>
    <br>
    <input type='submit' name='submit'>
</form>