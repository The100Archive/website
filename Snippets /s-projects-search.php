{exp:low_search:form collection="submissions" search_mode="all" status="not closed" result_page="showcase/search" form_class="form-inline"}
<select name="category[]">
     <option value="">design form</option>
     <option value=""></option>
      {exp:channel:categories channel="submissions" category_group="2" style="linear"}
        <option value="{category_id}"{if category_id IN ({low_search_category})} selected="selected"{/if}>
          {category_name}
        </option>
      {/exp:channel:categories}
    </select>

<select name="category[]">
     <option value="">client type</option>
     <option value=""></option>
      {exp:channel:categories channel="submissions" category_group="1" style="linear"}
        <option value="{category_id}"{if category_id IN ({low_search_category})} selected="selected"{/if}>
          {category_name}
        </option>
      {/exp:channel:categories}
    </select>

    <input type="search" name="keywords" id="keywords" placeholder="keyword" />

    <button class="btn btn-inverse" type="submit">Search</button>
{/exp:low_search:form}