let labels1 =[];
let data1 = [25,25,25,25];
let colors1= ['#FF7F50','#ffdacc' , '#ebebe0','#e0e0d1'];
let myChart1 = document.getElementById('myChart').getContext('2d');

let chart1  = new Chart(myChart1,{
	type:'doughnut',
	data:{
		labels:labels1,
		datasets:[{
			data:data1,
			backgroundColor:colors1
		}]
	},
	options:{
		title:{
			text:"Do you Like doughnuts?",
			display:true
		}
	}
})