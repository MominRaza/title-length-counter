<?php
class title_length_counter_admin {

	function option_default($option) {

		switch($option) {
			case 'title_length_counter_css':
                return '#title-length-count {
    margin-top: 5px;
}
#title-length-count.exceed {
    color: var(--error);
}
#title-length-count.matched {
    color: var(--selected);
}
/* Style for Title Length Counter Plugin LTR */
#title-length-count {
	float: right;
}

/* Style for Title Length Counter Plugin RTL */
/* .qa-question-list-count {
    float: left;
} */';
			default:
				return null;				
		}

	}	   

	function admin_form(&$qa_content)
	{					   

		// Process form input

		$ok = null;

		if (qa_clicked('title_length_counter_save')) {
			foreach($_POST as $i => $v) {

				qa_opt($i,$v);
			}

			$ok = qa_lang('admin/options_saved');
		}
		else if (qa_clicked('title_length_counter_reset')) {
			foreach($_POST as $i => $v) {
				$def = $this->option_default($i);
				if($def !== null) qa_opt($i,$def);
			}
			$ok = qa_lang('admin/options_reset');
		}

		$fields = array();

		$fields[] = array(
				'rows' => 8,
				'label' => 'Title Length Counter CSS',
				'type' => 'textarea',
				'value' => qa_opt('title_length_counter_css'),
				'tags' => 'NAME="title_length_counter_css"',
                );		   
                
		return array(		   
				'ok' => ($ok && !isset($error)) ? $ok : null,

				'fields' => $fields,
				'buttons' => array(
					array(
						'label' => qa_lang_html('main/save_button'),
						'tags' => 'NAME="title_length_counter_save"',
					     ),
					array(
						'label' => qa_lang_html('admin/reset_options_button'),
						'tags' => 'NAME="title_length_counter_reset"',
					     ),
					)
			    );
	}
}