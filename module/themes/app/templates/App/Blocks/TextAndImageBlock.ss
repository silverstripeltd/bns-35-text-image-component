<div class="text-block">
    <div class="text-block__text-wrapper">
        <% if $Title && $ShowTitle %>
            <h2 class = "">$Title.LimitCharacters(50)</h2>
        <% end_if %>
        <p>$HTML</p>
        <button class="text-block__button">Button</button>
    </div>
    <div class="text-block__featured-image">
        <% if $Image %>
            <img src="$Image.URL" alt=""/>
        <% end_if %>
    </div>
</div>
