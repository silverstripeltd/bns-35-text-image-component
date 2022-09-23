<div class="text-block">
    <div class="text-block-container">
        <div class="text-block__text-wrapper">
            <% if $Title && $$ShowTitle %>
                <h2 class = "">$Title.LimitCharacters(50)</h2>
            <% end_if %>
            <div class="text-block__text-wrapper__inner-block">
                <p>$HTML</p>
            </div>
            <button class="text-block__button">Button</button>
        </div>
        <div class="text-block__text-wrapper">
            <% if $Image %>
                <img src="$Image.FillMax(560, 350).URL" alt="$Image.Title"/>
            <% end_if %>
        </div>
    </div>
</div>
