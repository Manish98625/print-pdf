<div #pdf-container>

    <embed id="pdf-embed"
        src="setting/printpdf/{id}/view#view=FitH&scrollbar=0&toolbar=0&statusbar=0&messages=0&navpanes=0"
        type="application/pdf">
</div>



{{--  <div class="timeline">

    <div class="multi-files">
        @php
            $card = \App\Models\Setting::FindOrFail($id);

            $agendafileurl = url('setting/printpdf/{id}' . $agenda->id . '/view');
        @endphp  --}}


        <script>
            const link = document.getElementById("pdf-embed");

            // Function to change the href attribute of the link
            function changeHref(fileurl) {
                newurl = fileurl + "#view=FitH&scrollbar=0&toolbar=0&statusbar=0&messages=0&navpanes=0";
                if (link.src != newurl) {
                    link.src = newurl;
                }
            }
        </script>
