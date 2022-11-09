function submitCheck()
{
    //get and store all data
    var userName = document.forms["store"]["userName"].value;
    var passWord = document.forms["store"]["passWord"].value;
    var appleAmt = document.forms["store"]["apple"].value;
    var peachAmt = document.forms["store"]["peach"].value;
    var pearAmt = document.forms["store"]["pear"].value;
    var shippingOpt = document.forms["store"]["shipping"].value;

    //check for negetive amounts
    if(appleAmt < 0 || peachAmt < 0 || pearAmt<0)
    {
      alert("Amounts cant be negetive");
      return false;
    }
    return true;
}
