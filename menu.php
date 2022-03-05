<script>
    function changeDiv(link)
    {
        var contentDiv = $('#content');
        if (link == '1')
            contentDiv.html('<iframe id="frame" src="portfolio/unity.php" frameBorder="0" width="100%" height="650">');
        if (link == '2')
            contentDiv.html('<iframe id="frame" src="portfolio/animations.php" frameBorder="0" width="100%" height="650">');
        if (link == '3')
            contentDiv.html('<iframe id="frame" src="portfolio/rigging.php" frameBorder="0" width="100%" height="650">');
        if (link == '4')
            contentDiv.html('<iframe id="frame" src="portfolio/modeling.php" frameBorder="0" width="100%" height="650">');
        if (link == '5')
            contentDiv.html('<iframe id="frame" src="portfolio/mel.php" frameBorder="0" width="100%" height="650">');
        if (link == '6')
            contentDiv.html('<iframe id="frame" src="portfolio/unreal.php" frameBorder="0" width="100%" height="650">');
        if (link == '7')
            contentDiv.html('<iframe id="frame" src="portfolio/retargeting.php" frameBorder="0" width="100%" height="650">');
        if (link == '8')
            contentDiv.html('<iframe id="frame" src="portfolio/sculpting.php" frameBorder="0" width="100%" height="650">');

    }
</script>

<div id="table">
    <table>
        <tr>
            <th style="width: 200px">Main skills:</th>
            <th style="width: 200px">Secondary skills:</th>
            <th style="width: 200px">Also interested in:</th>
        </tr>
        <tr id="fadetext">
            <td>
                <ul>
                    <li class="menu-item"><a title="I can model basically anything, just give me refs" href="#Modeling" onclick="changeDiv('4')">Modeling</a></li>
                    <li class="menu-item"><a title="Humanoid rigs, Hybrid facial rigs, Quadruped rigs" href="#Rigging" onclick="changeDiv('3')">Rigging</a></li>
                    <li class="menu-item"><a title="I LOVE to animate! Mostly humanoid characters." href="#Animations" onclick="changeDiv('2')">Animations</a></li>
                    <li>Soft-skills</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li class="menu-item"><a title="Rarely." href="#Sculpting" onclick="changeDiv('8')">Sculpting</a></li>
                    <li>Lighting scenes in Unity</li>
                    <li class="menu-item"><a title="I use Motion Builder to transfer animations and export to any 3D package" href="#Animation retargeting" onclick="changeDiv('7')">Animation retargeting</a></li>
                    <li>Teaching</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li class="menu-item"><a title="I can make an MVP with C# in Unity." href="#Unity" onclick="changeDiv('1')">Unity</a></li>
                    <li class="menu-item"><a title="For now I almost completed first version of my autorigging script" href="#Maya scripting" onclick="changeDiv('5')">Maya scripting</a></li>
                    <li>Houdini simulations</li>
                    <li class="menu-item"><a title="This engine is a beast! I will definitely try to make something in it in closest future" href="#Unreal Engine" onclick="changeDiv('6')">Unreal Engine</a></li>
                </ul>
            </td>
        </tr>
    </table>
</div>