<?php

class qa_html_theme_layer extends qa_html_theme_base
{
    public function head_custom()
	{
        qa_html_theme_base::head_custom();
        $this->output('<style type="text/css">'.qa_opt('title_length_counter_css').'</style>');
	}
    function body_suffix()
	{
        qa_html_theme_base::body_suffix();
        switch ( $this->template ) {
			case 'ask' :
				$this->output('<script type="text/javascript">
    var title = document.getElementById("title");
    let p = document.createElement("p");
    p.innerText = title.value.length + "/'.qa_opt('max_len_q_title').'";
    p.id = "title-length-count";
    title.insertAdjacentElement("afterend", p);
    p2 = document.getElementById("title-length-count");
    title.onkeyup = function () {
        if (title.value.length > '.qa_opt('max_len_q_title').') {
            p2.className = "exceed";
        } else if (title.value.length < '.qa_opt('min_len_q_title').') {
            p2.className = "";
        } else {
            p2.className = "matched";
        }
        p2.innerText = title.value.length + "/'.qa_opt('max_len_q_title').'";
    }
</script>');
			break;
		}
    }
}