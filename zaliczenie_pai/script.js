

function currentDate () 
{

		var months = ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"];
		var days = ["poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota", "niedziela"];

		var d = new Date();
		var n = d.getDay() - 1;
		var day = d.getDate();
		var year = d.getFullYear();
		var month = d.getUTCMonth();

		var final_date = "Dzisiaj jest " + days[n] + " , " + day +" "+ months[month] + " "+ year +" roku";

		document.getElementById("data").innerHTML = final_date;

}
