{{-- csrf untuk bookmark --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="modal fade" id="bookmark-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header d-flex text-center justify-content-center"
                style="background-color: rgb(238, 181, 0)">
                <h5 class="fontMonsseratBold text-center" id="exampleModalLabel" style="color: black">Save to Playlist</h5>
            </div>

            <div class="modal-body fontMonsseratRegular bg-dark">
            </div>
        </div>
    </div>
</div>

<script>
    var music_id = $('#bookmark-btn').attr('data-id');

    // ketika document ready
    $(document).ready(function() {
        // ketika modal load
        $('#bookmark-modal').on('show.bs.modal', function(event) {
            // reset
            $('.modal-body').empty();

            // fetch playlist tersedia apa saja
            $.ajax({
                type: "GET",
                url: "{{ url('user/bookmark') }}?music_id=" + music_id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // ini wajib
                },
                success: function(response) {
                    $.each(response, function(index, item) {
                        var selected;
                        if (item['is_added'] == 1) {
                            selected = 'checked';
                        } else {
                            selected = '';
                        }

                        $('.modal-body').append(`
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="playlist${item['id']}" ${selected} onchange="updatePlaylist(${item['id']})">
                            <label class="form-check-label" for="playlist${item['id']}">${item['name']}</label>
                        </div>
                        `);
                    })
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });
    });

    // ketika checkbox berubah
    function updatePlaylist(playlist_id) {
        // cek apakah checkbox di check atau tidak
        var is_added = $('#playlist' + playlist_id).is(':checked');
        console.log(is_added);

        // jika tidak di check
        $.ajax({
            type: "POST",
            url: "{{ url('user/bookmark') }}",
            data: {
                music_id: music_id,
                playlist_id: playlist_id,
                is_added: is_added
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // ini wajib
            },
            success: function(response) {
                console.log(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
    }
</script>
