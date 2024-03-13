<?php

use Esign\DatabaseTrigger\DatabaseTrigger;
use Esign\DatabaseTrigger\Enums\TriggerEvent;
use Esign\DatabaseTrigger\Enums\TriggerTiming;
use Esign\DatabaseTrigger\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::createTrigger('after_update_book_rating_trigger_insert', function (DatabaseTrigger $trigger) {
            $trigger->on('reviews');
            $trigger->timing(TriggerTiming::AFTER);
            $trigger->event(TriggerEvent::INSERT);
            $trigger->statement('
                DECLARE total_book_rating decimal(10,2);

                SELECT AVG(rating) INTO total_book_rating FROM reviews WHERE book_id = NEW.book_id;

                UPDATE books SET rating = total_book_rating WHERE id = NEW.book_id;
            ');
        });
    }

    public function down(): void
    {
        Schema::dropTriggerIfExists('after_update_book_rating_trigger_insert');
    }
};
