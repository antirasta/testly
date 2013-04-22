<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
</script>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Värk ää</a></li>
    <li><a href="#tabs-2">Sanctus Buduaarimus</a></li>
    <li><a href="#tabs-3">Opel Rekord</a></li>
  </ul>
  <div id="tabs-1">
	  <form method="post">
		  <label>Küsimuse nimi</label>
		  <input type="text" name="name" value="<?$test['name']?>">
		  <label>Sissesuunaja</label>
		  <textarea name="introduction"><?=$test['introduction']?></textarea>
		  <label>Kokkuvõte</label>
		  <textarea name="conclusion"><?=$test['conclusion']?></textarea>
		  <label>Ligipääsu kood</label>
		  <input type="text" name="passcode" value="<?$test['passcode']?>"></input>

	  </form>  </div>
  <div id="tabs-2">
	  <label>Küsi musi</label>
	  <textarea name="question_text"><?=$test['question_text']?></textarea>
	  <label>Tüüp nah</label>
	  <select name="type_id" id="type_id">
		  <option value="1">True/False</option>
		  <option value="1" selected="selected">Multiple choice</option>
		  <option value="1">Multiple response</option>
		  <option value="1">Fill in the blank</option>
	  </select>
	<div id="answer-template">
		<div id="type_id_1" class="answer-template">
			<label>Sisesta kaks vastust, märgi neist õige</label>
			<input type="radio" name="tf.correct" value="0" checked="checked">
			<textarea name="answer.0">True</textarea>
			<input type="radio" name="tf.correct" value="1" checked="checked">
			<textarea name="answer.1">False</textarea>
		</div>
		<div id="type_id_2">
			<label>Sisesta vastusevariandid ja märgi ära, milline neist on õige</label>
			<div id="multiple-choice-options">
				<div class="answer-option">
					<input type="radio" name="mc.incorrect" value="0">
					<textarea name="mc.answer.0"></textarea>
				</div>
				<div class="answer-option">
					<input type="radio" name="mc.incorrect" value="1">
					<textarea name="mc.answer.1"></textarea>
				</div>
				<div class="answer-option">
					<input type="radio" name="mc.incorrect" value="2">
					<textarea name="mc.answer.2"></textarea>
				</div>
				<div class="answer-option">
					<input type="radio" name="mc.incorrect" value="3">
					<textarea name="mc.answer.3"></textarea>
				</div>
			</div>
		</div>
		<div id="type_id_3" class="answer-template">
			<label>Sisesta vastusevariandid ja märgi neist õiged</label>
			<div id="multiple-response-answer-option">
				<div class="answer-option">
					<input type="checkbox" name="mr.incorrect" value="0" checked="3">
					<textarea name="mr.answer.3"></textarea>
				</div>
				<div class="answer-option">
					<input type="checkbox" name="mr.incorrect" value="0" checked="3">
					<textarea name="mr.answer.3"></textarea>
				</div>
				<div class="answer-option">
					<input type="checkbox" name="mr.incorrect" value="0" checked="3">
					<textarea name="mr.answer.3"></textarea>
				</div>
				<div class="answer-option">
					<input type="checkbox" name="mr.incorrect" value="0" checked="3">
					<textarea name="mr.answer.3"></textarea>
				</div>
			</div>
		</div>
		<div id="type_id_4">
			<label>Sisesta võimalikud vastusevariandid (üks vastus ühte kasti)</label>
			<div id="fill-in-the-blank-answer-option">
				<div class="answer-option">
						<input type="checkbox" name="fitb.incorrect" checked="checked" disabled="true">
						<textarea name="fitb.answer.0"></textarea>
				</div>
			</div>
		</div>
	</div>
  </div>
  <div id="tabs-3">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div>