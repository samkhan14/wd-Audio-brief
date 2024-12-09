<style>
    td {
        word-break: break;

    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Briefs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <table id="allbriefs" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Brief ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $index => $data)
                        <tr>
                            <td>{{ $data['brief_id'] }}</td>
                            <td>{{ $data['name'] }}</td>
                            <td>{{ $data['email'] }}</td>
                            <td>{{ $data['phone_number'] }}</td>
                            <td>{{ $data['created_at'] }}</td>
                            <td>
                                <button class="btn btn-primary" onclick="showQA({{ json_encode($data) }})"
                                    data-bs-toggle="modal" data-bs-target="#qaModal">
                                    View Brief
                                </button>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="qaModal" tabindex="-1" aria-labelledby="qaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="qaModalLabel">Brief Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Full Brief</h5>
                    <p id="modalFullBrief"></p>

                    <h5>Questions & Answers</h5>
                    <!-- Set a max height and make it scrollable -->
                    <div id="modalQASection" style="max-height: 300px; overflow-y: auto; padding-right: 10px;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <!-- DataTables initialization script -->
 
    <script>

        $(document).ready(function() {
            $('#allbriefs').DataTable({
            "order": [[4, "desc"]], 
        });
        });

        function showQA(data) {

            document.getElementById('modalFullBrief').textContent = data.full_brief;

            // Populate the Q/A section
            const qaSection = document.getElementById('modalQASection');
            qaSection.innerHTML = ''; // Clear previous content

            if (data.q_a && data.q_a.length > 0) {
                data.q_a.forEach(function(qa) {
                    const qaItem = document.createElement('div');
                    qaItem.classList.add('qa-item');

                    const question = document.createElement('p');
                    question.innerHTML = `<strong>Q:</strong> ${qa.question}`;
                    qaItem.appendChild(question);

                    const answer = document.createElement('p');
                    answer.innerHTML = `<strong>A:</strong> ${qa.answer}`;
                    qaItem.appendChild(answer);

                    const separator = document.createElement('hr');
                    qaItem.appendChild(separator);

                    qaSection.appendChild(qaItem);
                });
            } else {
                qaSection.innerHTML = '<p>No Q&A available for this brief.</p>';
            }
        }
    </script>
    </div>
</x-app-layout>
