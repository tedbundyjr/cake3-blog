<h1>Add Article</h1>
<?php
    echo $this->Form->create($article);
	// just added the categories input
	echo $this->Form->input('category_id');
    echo $this->Form->input('title');
    echo $this->Form->input('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>