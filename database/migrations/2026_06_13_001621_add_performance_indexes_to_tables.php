<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations — add performance indexes.
     */
    public function up(): void
    {
        // Rooms: frequently filtered/sorted by these columns
        Schema::table('rooms', function (Blueprint $table) {
            $table->index('is_available');
            $table->index('is_featured');
            $table->index('sort_order');
            $table->index(['is_available', 'is_featured', 'sort_order'], 'rooms_available_featured_sort_idx');
        });

        // Bookings: frequently queried by status, room_id, and date ranges
        Schema::table('bookings', function (Blueprint $table) {
            $table->index('status');
            $table->index(['check_in', 'check_out'], 'bookings_dates_idx');
            $table->index(['room_id', 'status'], 'bookings_room_status_idx');
        });

        // Facilities: frequently filtered by is_active and sorted
        Schema::table('facilities', function (Blueprint $table) {
            $table->index('is_active');
            $table->index('sort_order');
            $table->index(['is_active', 'sort_order'], 'facilities_active_sort_idx');
        });

        // Testimonials: frequently filtered by is_active and sorted by created_at
        Schema::table('testimonials', function (Blueprint $table) {
            $table->index('is_active');
            $table->index(['is_active', 'created_at'], 'testimonials_active_date_idx');
        });

        // Galleries: frequently filtered by is_featured
        Schema::table('galleries', function (Blueprint $table) {
            $table->index('is_featured');
            $table->index('room_id');
            $table->index(['is_featured', 'created_at'], 'galleries_featured_date_idx');
        });

        // Contacts: frequently filtered by is_read
        Schema::table('contacts', function (Blueprint $table) {
            $table->index('is_read');
            $table->index('email');
        });
    }

    /**
     * Reverse the migrations — drop added indexes.
     */
    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropIndex('rooms_available_featured_sort_idx');
            $table->dropIndex(['is_available']);
            $table->dropIndex(['is_featured']);
            $table->dropIndex(['sort_order']);
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->dropIndex('bookings_dates_idx');
            $table->dropIndex('bookings_room_status_idx');
            $table->dropIndex(['status']);
        });

        Schema::table('facilities', function (Blueprint $table) {
            $table->dropIndex('facilities_active_sort_idx');
            $table->dropIndex(['is_active']);
            $table->dropIndex(['sort_order']);
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropIndex('testimonials_active_date_idx');
            $table->dropIndex(['is_active']);
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->dropIndex('galleries_featured_date_idx');
            $table->dropIndex(['is_featured']);
            $table->dropIndex(['room_id']);
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->dropIndex(['is_read']);
            $table->dropIndex(['email']);
        });
    }
};
