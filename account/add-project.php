{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu" }

<div class="container">

{exp:safecracker channel="submissions" return="account/preview-project/ENTRY_ID" entry_id="{segment_3}" class="form-horizontal nicer" safecracker_head="yes" 
error_handling="inline"
preserve_checkboxes="yes"
rules:title="required"
rules:submission_description="required"
rules:submission_images="required"
}
{___s-author-check}



<div class="row pad-top">
<div class="six columns offset-by-three">
	<h1>Submit a Project</h1>
</div>
<div class="two columns end text-small text-black link-red">
	<p>Check out the submission guidelines. <a href="{path="learn/kb/submitting-your-work"}" >Learn More &rarr;</a></p>
</div>
</div>


<div class="row pad-bottom">
<div class="eight columns offset-by-two">

	
	{!-- This represents the year the submission relates too --}
	<input type="hidden" name="category[]" value="29">
        <input type="hidden" name="category[]" id="category_client" value="" />
	<input type="hidden" name="category[]" id="category_discipline" value="" />
	<input type="hidden" name="status" value="Incomplete">
	
	<div class="row">
		<div class="eight columns end">
			<div class="control-group">
			    <div class="controls">
			    <label class="control-label" for="inputTitle">* Project Title - please include the year in brackets</label>
			      <input type="text" class="expand input-text" name="title" id="title" placeholder="Project Title" value="{if title}{title}{/if}" required>
			      {if error:title}<span class="alert alert-error">{error:title}</span>{/if}
			    </div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<div class="control-group">
	    <div class="controls">
	  <label class="control-label" for="inputDescription">* Description</label>
	      <textarea class="expand textarea" name="submission_description" id="inputDescription" placeholder="200 words on how the project was designed and delivered" rows="8" required>{if submission_description}{submission_description}{/if}</textarea>
	      {if error:submission_description}<span class="alert alert-error">{error:submission_description}</span>{/if}
	    </div>
	</div>
	</div>
	
	{!--
	<div class="control-group">
	  <label class="control-label">Test Image</label>
	    <div class="controls">
	        {field:submission_testimage}
	    </div>
	</div>
	--}
	
	<div class="row no_trans">
	<div class="control-group">
	    <div class="controls">
	  <label class="control-label">* Images &ndash; up to six images, the first of which will be the project thumbnail</label>
	        {field:submission_images}
	    {if error:submission_images}<br /><span class="alert alert-error">{error:submission_images}</span>{/if}
	    </div>
	</div>
	</div>
	
	
	{!--
	
	<div class="control-group">
	  <label class="control-label">Image Upload</label>
	
	<?php
	for($i=1; $i <= 6; $i++) {
	 $matrix_row = 'row_new_' . ($i-1);
	?>
	
	<div class="controls image_upload<?php echo $i; ?>">
	  <input type="hidden" name="submission_images[row_order][]" value="<?php echo $matrix_row; ?>">
	  <input type="file" name="submission_images[<?php echo $matrix_row; ?>][col_id_1]">
	</div>
	
	<?php } ?>
	</div>
	--}
	
	<div class="row">
	<div class="control-group">
	    <div class="controls">
			<label class="control-label" for="inputUrl">Project Website &ndash; Address (include http://)</label>
	      <input type="url" class="expand input-text" name="submission_url" id="inputUrl" placeholder="http://" value="{if submission_url}{submission_url}{/if}">
	    </div>
	</div>
	</div>
	
	<div class="row">
	<div class="control-group">
	    <div class="controls">
			<label class="control-label" for="inputVideo">Video &ndash; YouTube or Vimeo address (include http://)</label>
	      <input type="url" class="expand input-text" name="submission_video" id="inputVideo" placeholder="http://" value="{if submission_video}{submission_video}{/if}">
	    </div>
	</div>
	</div>
	
	<div class="row">
	<div class="control-group">
	<label class="control-label">* Designers &ndash; drag to the right, selecting all designers on this project, including yourself</label>
	<div class="controls">{field:submission_members}
	{if error:submission_members}<br /><span class="alert alert-error">{error:submission_members}</span>{/if}</div>
	</div>
	</div>
	
	<div class="row">
	<div class="control-group">
	<label class="control-label"><br />* Workplaces &ndash; drag to the right to select</label>
	<div class="controls">{!--<p>If you are a business owner and your design practice is not listed here, you can <a href="{path="login/add-group"}">add your design practice here</a>, before you submit your project.</p>--}{field:submission_practices}
	{if error:submission_practices}<br /><span class="alert alert-error">{error:submission_practices}</span>{/if}</div>
	</div>
	</div>
	
	<div class="row">
	<div class="control-group">
	<label class="control-label"><br />Other Credits</label>
	<div class="controls">{field:submission_credits}</div>
	</div>
	</div>
	
	<!--<div class="control-group">
	<label class="control-label">Image Test</label>
	<div class="controls"><p>Image upload field with instant upload and progress bar</p>{field:submission_image_test}</div>
	</div>
	-->

</div></div><!--End first part of form-->


<div class="row pad-top text-black">
<div class="six columns offset-by-three">
	<h4>Supplementary details:</h4>
</div>
<div class="three columns end text-small link-red">
	<p>This information is gathered so that we can create a richer archive that tells the full story of Irish graphic design. <a href="{path="learn/kb/gathering-information"}" >Learn more about how this works &rarr;</a></p>
</div>
</div>


<div class="row pad-bottom">
<div class="eight columns offset-by-two">

<div class="row">
	<div class="three columns"><label class="control-label">Client Context</label>
	</div>
	<div class="six columns end">
		<div class="control-group">
		    <div class="controls">
		       {category_menu}
		    	<select name="clientType" class="client" tabindex="2">
		       <option value="">Pick one</option>
		       {categories}{if {category_group_id} == "1"}<option value="{category_id}" {selected}>{category_name}</option>{/if}{/categories}
		       </select>
		       {/category_menu}
		    </div>
		</div>
	</div>
</div>

<div class="row">
	<div class="three columns"><label class="control-label">Design Context</label>
	</div>
	<div class="six columns end">
		<div class="control-group">
		    <div class="controls">
				{category_menu}
				<select name="designdiscipline" class="discipline" tabindex="3">
				<option value="">Pick one</option>
				{categories}{if {category_group_id} == "2"}<option value="{category_id}" {selected}>{category_name}</option>{/if}{/categories}
				</select>
				{/category_menu}
		    </div>
		</div>
	</div>
</div>

<div class="row">
	<div class="three columns"><label class="control-label">Descriptive Tags</label>
	</div>
	<div class="eight columns end">
		<div class="control-group">
		    <div class="controls">
		      {field:submission_tags}
		      {!--<input class="span4" type="text" name="submission_tags" id="inputTags" value="{if submission_tags}{submission_tags}{/if}" placeholder="Tags">--}
		      {if error:submission_tags}<span class="alert alert-error">{error:submission_tags}</span>{/if}
		    </div>
		</div>
	</div>
</div>


</div></div><!--End second part of form-->

<div class="row pad-bottom pad-top">
<div class="eight columns offset-by-two">

<div class="row">
	<div class="three columns"><label class="control-label"><input type="checkbox" name="submission_terms[]" id="submission_terms[]" value="Yes" {if submission_terms == "Yes"}checked="checked"{/if} required checked/><!-- This comment is required for checkbox field: {submission_terms}-->
	</label>

	</div>
	<div class="eight columns end">
	<label for="submission_terms[]" class="text-regular text-white">* I have permission from the project originator and copyright holder to submit this project.<label>
	</div>
	{if error:submission_terms}<br /><span class="alert alert-error">{error:submission_terms}</span>{/if}
</div>


<div class="row pad-top">
<div class="six columns offset-by-three end">
<div class="form-actions"><button type="submit" class="xlarge black button hover-green">Preview and Submit</button></div>
<p class="text-small text-black"><br />The preview page can take up to five minutes to display.
Please be patient while your work is uploaded.</p>
</div>
</div>

</div></div><!--End form-->

{/exp:safecracker}



{embed="___includes/2014footer"}
