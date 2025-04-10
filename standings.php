<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sports Hub | Home</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="index.css"/>
    <?php include('header.php'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <title>Premier League Standings - 2024/25 Season</title>
    <link rel="stylesheet" href="https://www.premierleague.com/resources/rebrand/v7.153.55/styles/screen.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #1a1a1a;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        main {
            padding: 20px;
        }
        .standings {
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            width: 80%;
            margin: 20px auto;
        }
        .standings table {
            width: 100%;
            border-collapse: collapse;
        }
        .standings th, .standings td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        .standings th {
            background-color: #333;
            color: #fff;
        }
        .standings tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<header>
    <h1>Premier League Standings - 2024/25 Season</h1>
    <p>As of April 9, 2025</p>
</header>

<main>
    <div class="standings">
        <table>
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Team</th>
                    <th>Points</th>
                    <th>Goal Difference</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Liverpool FC</td>
                    <td>73</td>
                    <td>+42</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Arsenal FC</td>
                    <td>62</td>
                    <td>+30</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nottingham Forest</td>
                    <td>57</td>
                    <td>+14</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Chelsea FC</td>
                    <td>53</td>
                    <td>+17</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Newcastle United</td>
                    <td>53</td>
                    <td>+13</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Manchester City</td>
                    <td>52</td>
                    <td>+17</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Aston Villa</td>
                    <td>51</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Fulham FC</td>
                    <td>48</td>
                    <td>+5</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Brighton & Hove Albion</td>
                    <td>47</td>
                    <td>+2</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Bournemouth AFC</td>
                    <td>45</td>
                    <td>+11</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Crystal Palace</td>
                    <td>43</td>
                    <td>+4</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Brentford FC</td>
                    <td>41</td>
                    <td>+6</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Manchester United</td>
                    <td>40</td>
                    <td>+3</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Tottenham Hotspur</td>
                    <td>38</td>
                    <td>+1</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>West Ham United</td>
                    <td>36</td>
                    <td>-2</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Leeds United</td>
                    <td>34</td>
                    <td>-5</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Wolverhampton Wanderers</td>
                    <td>32</td>
                    <td>-16</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Ipswich Town</td>
                    <td>31</td>
                    <td>-34</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Leicester City</td>
                    <td>17</td>
                    <td>-45</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Southampton FC</td>
                    <td>10</td>
                    <td>-51</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php include('footer.php'); ?>

</body>
</html>
