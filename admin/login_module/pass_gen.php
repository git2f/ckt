<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="pass_gen_execute.php">
      <table>
          <tr>
              <td colspan="2"><input checked="checked" type="checkbox" name="alpha" /> Lowercase a-z</td>
          </tr>
          <tr>
              <td colspan="2"><input checked="checked" type="checkbox" name="alpha_upper" /> Uppercase A-Z</td>
          </tr>
          <tr>
              <td colspan="2"><input checked="checked" type="checkbox" name="numeric" /> Numbers (0-9)</td>
          </tr>
          <tr>
              <td colspan="2"><input  type="checkbox" name="special" /> Special Characters (.-+=_,!@$#*%<>[]{})</td>
          </tr>
          <tr>
              <td colspan="2"><h3 style="margin: 20px 0;">Password Length</h3></td>
          </tr>
          <tr>
              <td colspan="2"><input type="text" name="pwlength" size="2" maxlength="2" value="9" /></td>
          </tr>
          <tr>
              <td colspan="2"><input type="submit" value="Generate" /></td>
          </tr>
      </table>
    </form>
</body>
</html>