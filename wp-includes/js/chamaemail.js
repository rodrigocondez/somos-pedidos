function sendmail ()
{
  var url = '/email.php';
  new ajax.request (url, {

    onComplete: function(transport)
    {
      var feedback = transport.response.Text.evalJSON();
      if(feedback.result==0)
      alert ('Problema dutante o envio do email')
    }

  });
}
