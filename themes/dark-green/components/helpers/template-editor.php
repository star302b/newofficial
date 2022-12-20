<link rel="stylesheet" href="/assets/css/editor.min.css">
<script src="/assets/js/editor.min.js"></script>

<div class="editor-tool-block" style="z-index: 999">
    <nav>
        <ul class="">
            <li data-tab="0" class="js--editor-tab-button active">Sections</li>
            <li data-tab="1" class="js--editor-tab-button">Colors</li>
            <li data-tab="2" class="js--editor-tab-button">Fonts</li>
            <li data-tab="3" class="js--editor-tab-button">Templates</li>
        </ul>
    </nav>

    <div class="editor-wrapper">
        <div class="js--editor-tab editor-tab active" id="editor-tab-1">
            <div id="documentsSections" class="sections-list"></div>
        </div>
        <div class="js--editor-tab editor-tab" id="editor-tab-2">
            <div id="documentsColors" class="document-colors"></div>
        </div>
        <div class="js--editor-tab editor-tab" id="editor-tab-3">
            <div id="documentsFonts" class="sections-fonts"></div>
        </div>
        <div class="js--editor-tab editor-tab" id="editor-tab-4">
            <div id="documentsTemplates" class="sections-templates"></div>
        </div>
    </div>

    <div class="editor-footer">
        <button class="js--editor-save">Save</button>
    </div>

</div>