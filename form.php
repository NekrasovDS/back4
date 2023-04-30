<html>
  <head>
    <style>

.error {
border: 2px solid #aa0000; 
background: #F8E4DF; 
padding: 15px; 
border-radius: 9px; 
font-size: 12px;
}
  </style>
  </head>


  <body>
<?php
if (!empty($messages)) {
  print('<div id="messages">');
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}

?>
    <form action="" method="POST">
     <p> Форма и Cookie </p>
 <p> Введите Ваше имя <br>
      <input name="fio" <?php if ($errors['fio']) {print 'class="error"';} ?> value="<?php print $values['fio']; ?>" />
   
   
 <p> Укажите год своего рождения <br>
        <select name="year" <?php if ($errors['year']) {print 'class="error"';} ?>>
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
    <?php
    for ($i = 2023; $i >= 1922; $i--) {
        if ($i == $values['year']) {
            printf('<option selected value="%d">%d год</option>', $i, $i);
        } else {
            printf('<option value="%d">%d год</option>', $i, $i);
        }
    }?>
  </select>
   
   
  <p> Введите свою почту <br>
  <input name="email" <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>" />
  </p>
      
      
  <p> Укажите Ваш пол <br>
  <INPUT name="gender" <?php if ($errors['gender']) {print 'class="error"';}?>
  <?php if ($values['gender'] == 'm') {print 'checked'; }?> type="radio" value="m">
М
<INPUT name="gender" <?php if ($errors['gender']) {print 'class="error"';}?>
<?php if ($values['gender'] == 'j') {print 'checked'; }?> type="radio" value="j">
Ж
</p>
    
    
  <p> Какую суперсилу вы хотите/имеете? <br>
  <select name="superpower" <?php if ($errors['superpower']) {print 'class="error"';} ?> size="1">
  <option value="I" <?php if ($values['superpower'] == 'I') {print 'selected'; }?>>Бессмертие</option>
  <option value="F" <?php if ($values['superpower'] == 'F') {print 'selected'; }?>>Возможность летать</option>
  <option value="N" <?php if ($values['superpower'] == 'N') {print 'selected'; }?>>Хождение сквозь стены</option>
  <option value="R" <?php if ($values['superpower'] == 'R') {print 'selected'; }?>>Управление огнём</option>
</select></p> 


<p>Сколько у Вас конечностей?<br>
<INPUT name="limbs" <?php if ($errors['limbs']) {print 'class="error"';} ?> 
<?php if ($values['limbs'] == '0') {print 'checked'; }?> type="radio" value="0">
0
<INPUT name="limbs" <?php if ($errors['limbs']) {print 'class="error"';} ?> 
<?php if ($values['limbs'] == '1') {print 'checked'; }?>  type="radio" value="1">
1
<INPUT name="limbs" <?php if ($errors['limbs']) {print 'class="error"';} ?> 
<?php if ($values['limbs'] == '2') {print 'checked'; }?>  type="radio" value="2">
2
<INPUT name="limbs" <?php if ($errors['limbs']) {print 'class="error"';} ?> 
<?php if ($values['limbs'] == '3') {print 'checked'; }?>  type="radio" value="3">
3
<INPUT name="limbs" <?php if ($errors['limbs']) {print 'class="error"';} ?> 
<?php if ($values['limbs'] == '4') {print 'checked'; }?>  type="radio" value="4">
4
</p>
<INPUT type="bio" <?php if ($errors['bio']) {print 'class="error"';} ?> value="<?php print $values['bio']; ?>" name="bio" size="100" maxlength="100">
<div class="checkbox <?php if ($errors['check']) {print 'error';} ?> ">
                <input type="checkbox" name="check" <?php if($values['check']==TRUE){print 'checked';} ?>/> С пользовательским соглашением ознакомлен(а)</div>
  
  
<p><input type="submit" value="ok" /></p>
    </form>
  </body>
</html>

