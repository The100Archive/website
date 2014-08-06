{s-login-check}
{embed="includes/header" }

<div class="page-header">
<h1>Submit a Project</h1>
</div>

<div class="row">
<div class="span10">


<p><strong>Before you upload a project <a href="#myModal" role="button" data-toggle="modal" style="text-decoration:underline">read our project guidelines here</a>.</strong></p>

<p><strong>If you are a business owner and you have not already submitted your design practice,<br />please <a href="{path="login/add-group"}" style="text-decoration:underline">add your design practice here</a>, before you submit your project.</strong></p>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Project Guidelines</h3>
  </div>
  <div class="modal-body">
<p> All entered projects are viewed by a panel of 5 respected design practitioners from a range of backgrounds and specialisms. A project that receives 3 green lights is immediately added to the long list. for a project that receives 3 red lights, it unfortunately goes no further. </p>
<p>The decisions made by our review group are final, for more information you can read our terms and conditions here. We can't advise you what makes a long list worthy project, but there are some practical and technical guidelines that are required to present your project. It's important to follow these wisely as once a project is uploaded no refund can be offered for projects failing on technical issues.</p>
<h2>Practical </h2>
<ul>
  <li>do you feel your project is of high enough quality of thought and execution to be part of the archive? </li>
  <li>are you the copyright holder on the project? </li>
  <li>you have 6 images to communicate the quality of the project, are your images, crisp, clean, clear? Are you showing your projects strengths? </li>
  <li>you have a short amount of text (200 words) to describe your project, make sure you explain the what, why and how as clearly and succinctly as possible. </li>
  <li>make sure you associate your project to your company (if you have one) </li>
  <li>make sure you tag all other members if the team that worked on the project. </li>
</ul>
<h2>Technical</h2>
<ul>
  <li>ALL images must be 1000 x 700 pixels, 72 dpi, RGB and saved as a jpeg</li>
  <li>ONLY 6 images can be uploaded so choose and edit wisely </li>
</ul>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

{exp:safecracker channel="submissions" return="login/preview-project/ENTRY_ID" entry_id="{segment_3}" class="form-horizontal" safecracker_head="yes" 
error_handling="inline"
preserve_checkboxes="yes"
rules:title="required"
rules:submission_description="required"
rules:submission_images="required"
rules:submission_tags="required"
}
{s-author-check}

{!-- This represents the year the submission relates too --}
<input type="hidden" name="category[]" value="29">
<input type="hidden" name="status" value="Incomplete">


<div class="control-group">
  <label class="control-label" for="inputTitle">Project Title</label>
    <div class="controls">
      <input type="text" class="span4" name="title" id="title" placeholder="Title" value="{if title}{title}{/if}" required>
      {if error:title}<span class="alert alert-error">{error:title}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label">Client Type</label>
    <div class="controls">
       {category_menu}
       <select class="span4" name="category[]" id="categories">
       <option value="">Select -></option>
       {categories}{if {category_group_id} == "1"}<option value="{category_id}" {selected}>{category_name}</option>{/if}{/categories}
       </select>
       {/category_menu}
    </div>
</div>

<div class="control-group">
  <label class="control-label">Design Discipline</label>
    <div class="controls">
       {category_menu}
       <select class="span4" name="category[]" id="categories">
       <option value="">Select -></option>
       {categories}{if {category_group_id} == "2"}<option value="{category_id}" {selected}>{category_name}</option>{/if}{/categories}
       </select>
       {/category_menu}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="inputDescription">Description</label>
    <div class="controls">
      <textarea class="span4" name="submission_description" id="inputDescription" placeholder="Description" rows="6" required>{if submission_description}{submission_description}{/if}</textarea>
      {if error:submission_description}<span class="alert alert-error">{error:submission_description}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="inputTags">Descriptive Tags</label>
    <div class="controls">
      {field:submission_tags}
      {!--<input class="span4" type="text" name="submission_tags" id="inputTags" value="{if submission_tags}{submission_tags}{/if}" placeholder="Tags">--}
      {if error:submission_tags}<span class="alert alert-error">{error:submission_tags}</span>{/if}
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

<div class="control-group">
  <label class="control-label">Images</label>
    <div class="controls">
    <p>Click the + symbol to add additional images.</p>
        {field:submission_images}
    {if error:submission_images}<br /><span class="alert alert-error">{error:submission_images}</span>{/if}
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


<div class="control-group">
  <label class="control-label" for="inputUrl">Url</label>
    <div class="controls">
      <input class="span4" type="url" name="submission_url" id="inputUrl" placeholder="please include http://" value="{if submission_url}{submission_url}{/if}">
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="inputVideo">Vimeo/YouTube</label>
    <div class="controls">
      <input class="span4" type="url" name="submission_video" id="inputVideo" placeholder="please include http://" value="{if submission_video}{submission_video}{/if}">
    </div>
</div>

<div class="control-group">
<label class="control-label">Designers</label>
<div class="controls"><p>Select the designers who were involved in this project, including yourself.</p>{field:submission_members}
{if error:submission_members}<br /><span class="alert alert-error">{error:submission_members}</span>{/if}</div>
</div>

<div class="control-group">
<label class="control-label">Design Practices</label>
<div class="controls">{!--<p>If you are a business owner and your design practice is not listed here, you can <a href="{path="login/add-group"}">add your design practice here</a>, before you submit your project.</p>--}{field:submission_practices}
{if error:submission_practices}<br /><span class="alert alert-error">{error:submission_practices}</span>{/if}</div>
</div>

<div class="control-group">
<label class="control-label">Credits</label>
<div class="controls">{field:submission_credits}</div>
</div>

<div class="control-group">
<label class="control-label">Image Test</label>
<div class="controls"><p>Image upload field with instant upload and progress bar</p>{field:submission_image_test}</div>
</div>


<div class="control-group">
<label class="control-label"> </label><!-- {submission_terms} -->
<div class="controls"><label class="checkbox"><input type="checkbox" name="submission_terms" value="Yes" {if submission_terms == "Yes"}checked="checked"{/if} required /> I own the copyright of this design or it has been authorised by the owner(s) of such rights to grant the rights and certify
that the publication of this design will not violate the rights of any third party.<label>
{if error:submission_terms}<br /><span class="alert alert-error">{error:submission_terms}</span>{/if}</div>
</div>

<div class="form-actions"><button type="submit" class="btn btn-inverse">Confirm Your Project</button></div>

{/exp:safecracker}
</div>
</div>


{s-footer}