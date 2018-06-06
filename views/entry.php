<h1 class="text-denger bg-dark">Give entry</h1>
<form action="index.php" method="post">
    <label for="date">Date: </label>
    <input type="date" name="date" id="date" class="date">

    <label for="particular">Particular: </label>
    <input type="text" name="particular" id="particular" class="particular">

    <label for="tenderid">Tender ID: </label>
    <input type="text" name="tenderid" id="tenderid" class="tenderid">

    <label for="payorderno">Payorder NO.</label>
    <input type="number" name="payorderno" id="payorderno" class="payorderno">

    <label for="payorderamount">Payorder Amount: </label>
    <input type="number" name="payorderamount" id="payorderamount" class="payorderamount">

    <input type="submit" value="entry" name="entry">
</form>

<h1>Update existing payorder</h1>
<form action="index.php" method="post">
    <label for="payorderno">Payorder No.</label>
    <input type="number" name="payorderno" id="payorderno" class="payorderno">

    <label for="withdrawdate">Withdraw Date: </label>
    <input type="date" name="withdrawdate" id="withdrawdate" class="withdrawdate">

    <input type="submit" value="Submit" name="withdraw">
</form>