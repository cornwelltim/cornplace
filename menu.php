<div class="container">

    <script type="text/javascript">
        function changeDiv(link)
        {
            var contentDiv = $('#content');
            if (link == '1')
                contentDiv.html('<iframe id="frame" src="portfolio/unity.php" width="100%" height="600">');
            if (link == '2')
                contentDiv.html('<iframe id="frame" src="portfolio/animations.php" width="100%" height="600">');
            if (link == '3')
                contentDiv.html('<iframe id="frame" src="portfolio/rigging.php" width="100%" height="600">');
            if (link == '4')
                contentDiv.html('<iframe id="frame" src="portfolio/modeling.php" width="100%" height="600">');
            if (link == '5')
                contentDiv.html('<iframe id="frame" src="portfolio/mel.php" width="100%" height="600">');
            if (link == '6')
                contentDiv.html('<iframe id="frame" src="portfolio/unreal.php" width="100%" height="600">');
            if (link == '7')
                contentDiv.html('<iframe id="frame" src="portfolio/retargeting.php" width="100%" height="600">');
            if (link == '8')
                contentDiv.html('<iframe id="frame" src="portfolio/sculpting.php" width="100%" height="600">');

        }
    </script>


    <h1>Tim Conrwell</h1>
    <h2>CG Generalist</h2>

    <table>
        <tr>
            <th>Main skills:</th>
            <th>Secondary skills:</th>
            <th>Also interested in:</th>
        </tr>
        <tr>
            <td>
                <ul>
                    <li class="menu-item"><a href="#" onclick="changeDiv('4')">Modeling</a></li>
                    <li class="menu-item"><a href="#" onclick="changeDiv('3')">Rigging</a></li>
                    <li class="menu-item"><a href="#" onclick="changeDiv('2')">Animations</a></li>
                    <li>Soft-skills</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li class="menu-item"><a href="#" onclick="changeDiv('8')">Sculpting</a></li>
                    <li>Lighting scenes in Unity</li>
                    <li class="menu-item"><a href="#" onclick="changeDiv('7')">Animation retargeting</a></li>
                    <li>Teaching</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li class="menu-item"><a href="#" onclick="changeDiv('1')">Unity</a></li>
                    <li class="menu-item"><a href="#" onclick="changeDiv('5')">Maya scripting</a></li>
                    <li>Houdini simulations</li>
                    <li class="menu-item"><a href="#" onclick="changeDiv('6')">Unreal Engine</a></li>
                </ul>
            </td>
        </tr>
    </table>

    <h3>Contact me:</h3>
    <p class="lorem">tim@cornplace.com</p>

</div>