<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Management</title>
    <link rel="shortcut icon" href="/img/icon_site.png">
    <link rel="stylesheet" href="/css/dashbored.css">
    <link rel="stylesheet" href="/css/patient-management.css">
</head>
<style>
    :root {
    --accent: #2b87ff;
    --success: #22c55e;
    --danger: #ef4444;
    --warning: #f59e0b;
    --muted: #6b7280;
    --shadow: 0 12px 30px rgba(15,23,42,0.08);
    --radius: 12px;
}

.patient-management {
    width: min(1280px, 100%);
    margin: 28px auto;
    padding: 20px;
}

/* Header */
.management-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 28px;
    padding: 18px;
    background: linear-gradient(90deg, rgba(43,135,255,0.08), rgba(0,195,255,0.04));
    border-radius: var(--radius);
    border: 1px solid rgba(43,135,255,0.06);
}

.management-header h1 {
    margin: 0;
    font-size: 1.6rem;
    color: #0f172a;
}

.management-header .subtitle {
    margin: 4px 0 0;
    color: var(--muted);
    font-size: 0.95rem;
}

.btn-add {
    display: inline-block;
    padding: 10px 18px;
    background: linear-gradient(90deg, var(--accent), #00c3ff);
    color: white;
    border: none;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(43,135,255,0.18);
}

.btn-add:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 28px rgba(43,135,255,0.25);
}

/* Filters */
.filter-section {
    display: flex;
    gap: 16px;
    margin-bottom: 24px;
}

.search-box {
    flex: 1;
    position: relative;
    display: flex;
    align-items: center;
}

.search-box svg {
    position: absolute;
    left: 12px;
    color: var(--muted);
}

.search-box input {
    width: 100%;
    padding: 10px 12px 10px 36px;
    border: 1px solid rgba(15,23,42,0.06);
    border-radius: 10px;
    outline: none;
    transition: border-color 0.2s;
}

.search-box input:focus {
    border-color: var(--accent);
}

.filter-select {
    padding: 10px 12px;
    border: 1px solid rgba(15,23,42,0.06);
    border-radius: 10px;
    outline: none;
    cursor: pointer;
}

/* Stats Grid */
.stats-grid {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 28px;
}

.stat-card {
    display: flex;
    gap: 14px;
    align-items: center;
    padding: 16px;
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    border: 1px solid rgba(15,23,42,0.03);
}

.stat-icon {
    font-size: 2.2rem;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
}

.stat-card h3 {
    margin: 0;
    font-size: 0.95rem;
    color: var(--muted);
}

.stat-number {
    margin: 4px 0 0;
    font-size: 1.8rem;
    font-weight: 800;
    color: #0f172a;
}

/* Table */
.table-wrapper {
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    overflow: auto;
    width: 100%;
    height: 450px;
    margin-top: 0px
}

.patients-table {
    width: 100%;
    border-collapse: collapse;
}

.patients-table thead {
    background: linear-gradient(90deg, #f9fafb, #f3f4f6);
    border-bottom: 2px solid rgba(15,23,42,0.06);
}

.patients-table th {
    padding: 14px;
    text-align: left;
    font-weight: 600;
    color: #374151;
    font-size: 0.9rem;
    white-space: nowrap;
}

.patients-table td {
    padding: 14px;
    border-bottom: 1px solid rgba(15,23,42,0.03);
}

.patient-row:hover {
    background: rgba(43,135,255,0.02);
}

/* Patient Info */
.patient-info {
    display: flex;
    gap: 12px;
    align-items: center;
}

.patient-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid rgba(43,135,255,0.1);
}

.patient-name {
    margin: 0;
    font-weight: 600;
    color: #0f172a;
}

.patient-card {
    margin: 2px 0 0;
    font-size: 0.85rem;
    color: var(--muted);
}

/* Badges */
.badge-id {
    display: inline-block;
    padding: 4px 8px;
    background: rgba(43,135,255,0.1);
    color: var(--accent);
    border-radius: 6px;
    font-size: 0.85rem;
    font-weight: 600;
}

.badge-blood {
    display: inline-block;
    padding: 6px 10px;
    background: rgba(239,68,68,0.1);
    color: #dc2626;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
}

.status-badge {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
}

.status-active {
    background: rgba(34,197,94,0.1);
    color: var(--success);
}

.status-inactive {
    background: rgba(156,163,175,0.1);
    color: #6b7280;
}

.status-suspended {
    background: rgba(239,68,68,0.1);
    color: var(--danger);
}

/* Actions */
.action-buttons {
    display: flex;
    gap: 8px;
}

.btn-action {
    display: inline-block;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    border: 1px solid rgba(15,23,42,0.06);
    background: white;
    cursor: pointer;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    transition: all 0.2s ease;
}

.btn-view:hover {
    background: rgba(79,70,229,0.1);
    border-color: var(--accent);
}

.btn-edit:hover {
    background: rgba(34,197,94,0.1);
    border-color: var(--success);
}

.btn-delete:hover {
    background: rgba(239,68,68,0.1);
    border-color: var(--danger);
}

.empty-state {
    text-align: center;
    padding: 40px;
    color: var(--muted);
}

/* Pagination */
.pagination-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 28px;
    gap: 8px;
}

/* Responsive */
@media (max-width: 1024px) {
    .management-header {
        flex-direction: column;
        gap: 12px;
        align-items: flex-start;
    }
    
    .patients-table {
        font-size: 0.9rem;
    }
    
    .patient-info {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 768px) {
    .filter-section {
        flex-direction: column;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .table-wrapper {
        overflow-x: auto;
    }
    
    .patients-table th,
    .patients-table td {
        padding: 10px;
        font-size: 0.85rem;
    }
}
</style>
<body>
    @include('layout.section_admin')
    
    <section class="container patient-management">
        <header class="management-header">
            <div>
                <h1>Patient Management</h1>
                <p class="subtitle">Monitor, manage and update patient accounts</p>
            </div>
            
        </header>

        <!-- Filters & Search -->
        <div class="filter-section">
            <div class="search-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.35-4.35"></path>
                </svg>
                <input type="text" id="searchInput" placeholder="Search by name, card number, email...">
            </div>
            <select id="filterStatus" class="filter-select">
                <option value="">All Status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                <option value="suspended">Suspended</option>
            </select>
        </div>

        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon" style="background:rgba(79,70,229,0.1);color:#4f46e5">👥</div>
                <div>
                    <h3>Total Patients</h3>
                    <p class="stat-number">{{ $patients->count() ?? 0 }}</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background:rgba(34,197,94,0.1);color:#22c55e">✓</div>
                <div>
                    <h3>Active</h3>
                    <p class="stat-number">{{ $patients->where('status', 'active')->count() ?? 0 }}</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background:rgba(239,68,68,0.1);color:#ef4444">⚠</div>
                <div>
                    <h3>Suspended</h3>
                    <p class="stat-number">{{ $patients->where('status', 'suspended')->count() ?? 0 }}</p>
                </div>
            </div>
        </div>

        <!-- Patients Table -->
        <div class="table-wrapper">
            <table class="patients-table">
                <thead>
                    <tr>
                        <th>Patient ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Blood Type</th>
                        <th>Status</th>
                        <th>Joined</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($patients as $patient)
                    <tr class="patient-row">
                        <td>
                            <span class="badge-id">{{ $patient->id_patient }}</span>
                        </td>
                        <td>
                            <div class="patient-info">
                                <img src="{{ $patient->image_p ? asset('storage/'.$patient->image_p) : asset('/img/avatar-default.jpg') }}" alt="avatar" class="patient-avatar">
                                <div>
                                    <p class="patient-name">{{ $patient->first_name_p }} {{ $patient->last_name_p }}</p>
                                    <p class="patient-card">Card: {{ $patient->card_nbr }}</p>
                                </div>
                            </div>
                        </td>
                        <td>{{ $patient->email_p ?? 'N/A' }}</td>
                        <td>{{ $patient->phone_p ?? 'N/A' }}</td>
                        <td>
                            <span class="badge-blood">{{ $patient->blood_p ?? 'Unknown' }}</span>
                        </td>
                        <td>
                            <span class="status-badge status-{{ strtolower($patient->status ?? 'active') }}">
                                {{ ucfirst($patient->status ?? 'active') }}
                            </span>
                        </td>
                        <td>{{ $patient->created_at ? $patient->created_at->format('d M Y') : 'N/A' }}</td>
                        <td>
                            {{-- <div class="action-buttons">
                                <a href="{{ route('patient.show', $patient->id_patient) }}" class="btn-action btn-view" title="View">👁</a>
                                <a href="{{ route('patient.edit', $patient->id_patient) }}" class="btn-action btn-edit" title="Edit">✎</a>
                                <button class="btn-action btn-delete" onclick="confirmDelete({{ $patient->id_patient }})" title="Delete">🗑</button>
                            </div> --}}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center empty-state">
                            <p>No patients found</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($patients instanceof \Illuminate\Pagination\Paginator)
        <div class="pagination-wrapper">
            {{ $patients->links() }}
        </div>
        @endif
    </section>

    <script>
        // Search functionality
        document.getElementById('searchInput')?.addEventListener('keyup', function(e){
            const query = e.target.value.toLowerCase();
            document.querySelectorAll('.patient-row').forEach(row => {
                const text = row.innerText.toLowerCase();
                row.style.display = text.includes(query) ? '' : 'none';
            });
        });

        // Filter by status
        document.getElementById('filterStatus')?.addEventListener('change', function(e){
            const status = e.target.value.toLowerCase();
            document.querySelectorAll('.patient-row').forEach(row => {
                const badge = row.querySelector('.status-badge');
                if(!status || badge.innerText.toLowerCase().includes(status)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Delete confirmation
        function confirmDelete(id) {
            if(confirm('Are you sure you want to delete this patient?')) {
                // Create and submit form
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/patient/${id}`;
                form.innerHTML = '@csrf @method("DELETE")';
                document.body.appendChild(form);
                form.submit();
            }
        }
    document.getElementById("toggleButton").addEventListener("click", function () {
    const list = document.getElementById("hiddenList");
    const bottomElement = document.getElementById("port4");
    if (list.classList.contains("hidden")) {
        list.classList.remove("hidden");
        bottomElement.style.marginTop = "150px";
    } else {
        list.classList.add("hidden");
        bottomElement.style.marginTop = "20px"; 
    }
});
    </script>
</body>
</html>