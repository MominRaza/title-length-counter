<?php

class qa_html_theme_layer extends qa_html_theme_base
{
    function body_suffix()
	{
        qa_html_theme_base::body_suffix();
        $this->output('<script type="text/javascript">        
var title = document.getElementById("title");
title.onkeyup = function () {
    console.log(title.value.length);
}
</script>');
    }
}