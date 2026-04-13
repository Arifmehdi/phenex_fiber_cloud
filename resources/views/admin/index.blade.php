@extends('admin.master')

@section('title')
    Admin Dashboard | {{ env('APP_NAME') }}
@endsection

@section('body')
<style>
.stat-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}
.stat-number {
    font-size: 2rem;
    font-weight: 700;
}
.stat-label {
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.activity-item {
    transition: background-color 0.2s ease;
}
.activity-item:hover {
    background-color: #f8f9fa;
}
</style>

<section class="content py-4" style="min-height: 700px;">
    <div class="container-fluid">
        <!-- Row 1: Main Stats -->
        <div class="row g-3 mb-4">
            <!-- Users -->
            <div class="col-xl-3 col-md-6">
                <div class="card stat-card border-0 shadow-sm h-100" style="border-left: 4px solid #6610f2 !important;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1 stat-label">Total Users</p>
                                <h3 class="mb-0 fw-bold text-dark">{{ $totalUsers }}</h3>
                                <small class="text-success">{{ $activeUsers }} active</small>
                            </div>
                            <div class="rounded-circle bg-light p-3">
                                <i class="fas fa-users fa-2x text-purple"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="{{ route('admin.user') }}" class="text-decoration-none small">View All <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- News/Blog -->
            <div class="col-xl-3 col-md-6">
                <div class="card stat-card border-0 shadow-sm h-100" style="border-left: 4px solid #007bff !important;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1 stat-label">News & Tips</p>
                                <h3 class="mb-0 fw-bold text-dark">{{ $news }}</h3>
                                <small class="text-success">{{ $activeNews }} published</small>
                            </div>
                            <div class="rounded-circle bg-light p-3">
                                <i class="fas fa-newspaper fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="{{ route('news.index') }}" class="text-decoration-none small">View All <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contacts -->
            <div class="col-xl-3 col-md-6">
                <div class="card stat-card border-0 shadow-sm h-100" style="border-left: 4px solid #28a745 !important;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1 stat-label">Contacts</p>
                                <h3 class="mb-0 fw-bold text-dark">{{ $totalContacts }}</h3>
                                <small class="text-muted">messages</small>
                            </div>
                            <div class="rounded-circle bg-light p-3">
                                <i class="fas fa-envelope fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="{{ route('admin.contacts.index') }}" class="text-decoration-none small">View All <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Causes/Donations -->
            <div class="col-xl-3 col-md-6">
                <div class="card stat-card border-0 shadow-sm h-100" style="border-left: 4px solid #e83e8c !important;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1 stat-label">Pricing Plan</p>
                                <h3 class="mb-0 fw-bold text-dark">{{ $causes }}</h3>
                                <small class="text-success">{{ $activeCauses }} active</small>
                            </div>
                            <div class="rounded-circle bg-light p-3">
                                <i class="fas fa-hand-holding-heart fa-2x" style="color: #e83e8c;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="{{ route('admin.causes.index') }}" class="text-decoration-none small">View All <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2: Content Management -->
        <div class="row g-3 mb-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-bold"><i class="fas fa-layer-group me-2"></i>Content Management</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <!-- Sections -->
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="text-center p-3 rounded bg-light">
                                    <h4 class="mb-1 fw-bold">{{ $sections }}</h4>
                                    <small class="text-muted">Sections</small>
                                    <div class="mt-2">
                                        <span class="badge bg-{{ $activeSections > 0 ? 'success' : 'secondary' }}">{{ $activeSections }} active</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Section Setups -->
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="text-center p-3 rounded bg-light">
                                    <h4 class="mb-1 fw-bold">{{ $sectionSetups }}</h4>
                                    <small class="text-muted">Setups</small>
                                </div>
                            </div>

                            <!-- Features -->
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="text-center p-3 rounded bg-light">
                                    <h4 class="mb-1 fw-bold">{{ $features }}</h4>
                                    <small class="text-muted">Features</small>
                                </div>
                            </div>

                            <!-- Pricings -->
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="text-center p-3 rounded bg-light">
                                    <h4 class="mb-1 fw-bold">{{ $pricings }}</h4>
                                    <small class="text-muted">Pricings</small>
                                </div>
                            </div>

                            <!-- Departments -->
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="text-center p-3 rounded bg-light">
                                    <h4 class="mb-1 fw-bold">{{ $department }}</h4>
                                    <small class="text-muted">Services</small>
                                </div>
                            </div>

                            <!-- Companies -->
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="text-center p-3 rounded bg-light">
                                    <h4 class="mb-1 fw-bold">{{ $companies }}</h4>
                                    <small class="text-muted">Why We</small>
                                    <div class="mt-2">
                                        <span class="badge bg-{{ $activeCompanies > 0 ? 'success' : 'secondary' }}">{{ $activeCompanies }} active</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Quick Actions & Recent Activity -->
        <div class="row g-3">
            <!-- Quick Actions -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-bold"><i class="fas fa-bolt me-2"></i>Quick Actions</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('news.create') }}" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                                <i class="fas fa-plus-circle text-primary me-3"></i>
                                <div>
                                    <strong>Add New News</strong>
                                    <small class="d-block text-muted">Create a new article</small>
                                </div>
                            </a>
                            <a href="{{ route('sections.create') }}" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                                <i class="fas fa-layer-group text-purple me-3"></i>
                                <div>
                                    <strong>Add Section</strong>
                                    <small class="d-block text-muted">Create new section</small>
                                </div>
                            </a>
                            <a href="{{ route('pricings.create') }}" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                                <i class="fas fa-tags text-success me-3"></i>
                                <div>
                                    <strong>Add Pricing</strong>
                                    <small class="d-block text-muted">Create pricing plan</small>
                                </div>
                            </a>
                            <a href="{{ route('admin.causes.create') }}" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                                <i class="fas fa-heart text-danger me-3"></i>
                                <div>
                                    <strong>Add Pricing Plan</strong>
                                    <small class="d-block text-muted">Create donation cause</small>
                                </div>
                            </a>
                            <a href="{{ route('websiteparam') }}" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                                <i class="fas fa-cog text-secondary me-3"></i>
                                <div>
                                    <strong>Website Settings</strong>
                                    <small class="d-block text-muted">Configure site parameters</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent News -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold"><i class="fas fa-newspaper me-2"></i>Recent News</h5>
                        <a href="{{ route('news.index') }}" class="small">View All</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            @forelse($recentNews as $item)
                            <div class="list-group-item d-flex align-items-center py-3">
                                <div class="flex-grow-1">
                                    <strong class="d-block">{{ Str::limit($item->title, 35) }}</strong>
                                    <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                                </div>
                                <span class="badge bg-{{ $item->active == 1 ? 'success' : 'secondary' }}">
                                    {{ $item->active == 1 ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                            @empty
                            <div class="list-group-item text-center text-muted py-4">No news found</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Contacts -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold"><i class="fas fa-envelope me-2"></i>Recent Contacts</h5>
                        <a href="{{ route('admin.contacts.index') }}" class="small">View All</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            @forelse($recentContacts as $contact)
                            <div class="list-group-item d-flex align-items-center py-3">
                                <div class="flex-grow-1">
                                    <strong class="d-block">{{ Str::limit($contact->name, 25) }}</strong>
                                    <small class="text-muted">{{ Str::limit($contact->message, 30) }}</small>
                                </div>
                                <small class="text-muted">{{ $contact->created_at->diffForHumans() }}</small>
                            </div>
                            @empty
                            <div class="list-group-item text-center text-muted py-4">No contacts yet</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
