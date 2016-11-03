<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>This is a simple calculator</title>
	<script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
</head>
<body>
	<div id="app">
		<input type="text" v-model="number1" placeholder="Please enter a number">
		<br><br>
		<span v-if="!isNaN(number1)">Number1 is:@{{ number1 }}</span>
		<br><br>

		<input type="text" v-model="number2" placeholder="Please enter another number">
		<br><br>
		<span v-if="!isNaN(number2)">Number2 is:@{{ number2 }}</span>
		<br><br>


		<span>Please enter the operator:</span><br><br>
		<select v-model="selected">
		  <option>+</option>
		  <option>-</option>
		  <option>*</option>
		  <option>/</option>
		</select>
		<span>Selected: @{{ selected }}</span><br><br>
		
		<div v-if="selected == '+'">The result is:@{{ add }}</div>
		<div v-if="selected == '-'">The result is:@{{ sub }}</div>
		<div v-if="selected == '*'">The result is:@{{ mul }}</div>
		<div v-if="selected == '/'">The result is:@{{ div }}</div>
		
	</div>

	<script>
		new Vue({
			el:'#app',
			computed: {
				add: function () {
					a = parseInt(this.number1)
					b = parseInt(this.number2)
					return a + b
				},

				sub: function () {
					a = parseInt(this.number1)
					b = parseInt(this.number2)
					return a - b
				},

				mul: function () {
					a = parseInt(this.number1)
					b = parseInt(this.number2)
					return a * b
				},

				div: function () {
					a = parseInt(this.number1)
					b = parseInt(this.number2)
					return a / b
				}
			}
		})
	</script>
</body>
</html>