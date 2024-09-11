<!DOCTYPE html>
<html lang="ja">

<head>
     <meta charset="UTF-8">
     <title>PHP課題</title>
 </head>
 
<body> <!-- name属性を設定する（PHPでの値の取得時に必要）-->
    <h2>社員情報入力フォーム</h2>
<!-- action属性：送信先のPHPファイルを指定-->
<!-- method属性：「post」を指定-->
    <form action="confirm.php" method="post">
        <table>
            <tr> <!-- セルの行-->
                <td> 社員名</td> <!-- セル-->
                <td>
                    <input type="text" name="employee_name">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="text" name="employee_age">
                </td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td>
                    <select name="department">
                        <option value="開発部">開発部</option>
                        <option value="営業部">営業部</opution>
                        <option value="人事部">人事部</option>
                </td>
            </tr>

        </table> <!-- 上記にあるaction属性、method属性で送信先のPHPファイルを指定済-->
        <input type="submit" value="送信">
    </form>

</body>

</html>