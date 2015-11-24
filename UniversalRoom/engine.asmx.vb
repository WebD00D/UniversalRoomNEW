Imports System.Web.Services
Imports System.Web.Services.Protocols
Imports System.ComponentModel
Imports Stripe

' To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line.
<System.Web.Script.Services.ScriptService()> _
<System.Web.Services.WebService(Namespace:="http://tempuri.org/")> _
<System.Web.Services.WebServiceBinding(ConformsTo:=WsiProfiles.BasicProfile1_1)> _
<ToolboxItem(False)> _
Public Class engine
    Inherits System.Web.Services.WebService

    <WebMethod()> _
    Public Sub makeDonation(ByVal token As String, ByVal amount As String, ByVal email As String)

        Dim AmountToCharge As Decimal = 0
        If amount = "20" Then AmountToCharge = 2000
        If amount = "50" Then AmountToCharge = 5000
        If amount = "100" Then AmountToCharge = 10000

        StripeConfiguration.SetApiKey("sk_test_6JBscnzT4PeUmkgYfLjGdS0p")
        Dim myCharge = New StripeChargeCreateOptions()
        myCharge.Amount = AmountToCharge
        myCharge.Currency = "usd"
        myCharge.Description = "Universal Room Donation"
        myCharge.Source = New StripeSourceOptions() With {.TokenId = token}
        myCharge.Capture = True
        Dim chargeService = New StripeChargeService()
        Dim stripeCharge As StripeCharge = chargeService.Create(myCharge)

    End Sub

    <WebMethod()> _
    Public Function HelloWorld() As String
        Return "Hello World"
    End Function

End Class