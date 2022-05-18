<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Models\businessCategory;
use Illuminate\Support\Str;
class BusinessCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        businessCategory::truncate();
        $bc=[
        
            [
                'name'=>'Automotive',
                'parent_id'=>'0',
                'slug'=>Str::slug('Automotive'),
            ],
            [
                'name'=>'Business Support & Supplies ',
                'parent_id'=>'0',
                'slug'=>Str::slug('Business Support & Supplies '),
            ],
            [
                'name'=>'Computers & Electronics',
                'parent_id'=>'0',
                'slug'=>Str::slug('Computers & Electronics'),
            ],
            [
                'name'=>'Construction & Contractors',
                'parent_id'=>'0',
                'slug'=>Str::slug('Construction & Contractors'),
            ],
            [
                'name'=>'Education',
                'parent_id'=>'0',
                'slug'=>Str::slug('Education'),
            ],
            [
                'name'=>'Entertainment',
                'parent_id'=>'0',
                'slug'=>Str::slug('Entertainment'),
            ],
            [
                'name'=>'Food & Dining',
                'parent_id'=>'0',
                'slug'=>Str::slug('Food & Dining'),
            ],
            [
                'name'=>'Health & Medicine',
                'parent_id'=>'0',
                'slug'=>Str::slug('Health & Medicine'),
            ],
            [
                'name'=>'Legal & Financial ',
                'parent_id'=>'0',
                'slug'=>Str::slug('Legal & Financial'),
            ],
            [
                'name'=>'Manufacturing, Wholesale,Distribution',
                'parent_id'=>'0',
                'slug'=>Str::slug('Manufacturing, Wholesale,Distribution'),
            ],
            [
                'name'=>'Merchants (Retail)',
                'parent_id'=>'0',
                'slug'=>Str::slug('Merchants (Retail)'),
            ],
            [
                'name'=>'Personal Care & Services',
                'parent_id'=>'0',
                'slug'=>Str::slug('Personal Care & Services'),
            ],
            [
                'name'=>'Real Estate',
                'parent_id'=>'0',
                'slug'=>Str::slug('Real Estate'),
            ],
            [
                'name'=>'Travel & Transportation',
                'parent_id'=>'0',
                'slug'=>Str::slug('Travel & Transportation'),
            ],     [
                'name'=>'Consultants',
                'parent_id'=>'2',
                'slug'=>Str::slug('Consultants'),
            ],
            [
                'name'=>'Employment Agency',
                'parent_id'=>'2',
                'slug'=>Str::slug('Employment Agency'),
            ],
            [
                'name'=>'Marketing & Communications',
                'parent_id'=>'2',
                'slug'=>Str::slug('Marketing & Communications'),
            ],
            [
                'name'=>'Office Supplies',
                'parent_id'=>'2',
                'slug'=>Str::slug('Office Supplies'),
            ],
            [
                'name'=>'Printing & Publishing',
                'parent_id'=>'2',
                'slug'=>Str::slug('Printing & Publishing'),
            ], 
            [
                'name'=>'Auto Accessories',
                'parent_id'=>'1',
                'slug'=>Str::slug('Auto Accessories'),
            ], 
            [
                'name'=>'Auto Dealers – New',
                'parent_id'=>'1',
                'slug'=>Str::slug('Auto Dealers – New'),
            ],     [
                'name'=>'Auto Dealers – Used',
                'parent_id'=>'1',
                'slug'=>Str::slug('Auto Dealers – Used'),
            ],     [
                'name'=>'Detail & Carwash',
                'parent_id'=>'1',
                'slug'=>Str::slug('Detail & Carwash'),
            ],     [
                'name'=>'Gas Stations',
                'parent_id'=>'1',
                'slug'=>Str::slug('Gas Stations'),
            ],     [
                'name'=>'Motorcycle Sales & Repair',
                'parent_id'=>'1',
                'slug'=>Str::slug('Motorcycle Sales & Repair'),
            ],     [
                'name'=>'Rental & Leasing',
                'parent_id'=>'1',
                'slug'=>Str::slug('Rental & Leasing'),
            ],     [
                'name'=>'Service, Repair & Parts',
                'parent_id'=>'1',
                'slug'=>Str::slug('Service, Repair & Parts'),
            ],     [
                'name'=>'Towing',
                'parent_id'=>'1',
                'slug'=>Str::slug('Towing'),
            ],     [
                'name'=>'Computer Programming & Support',
                'parent_id'=>'3',
                'slug'=>Str::slug('Computer Programming & Support'),
            ],     [
                'name'=>'Consumer Electronics & Accessories',
                'parent_id'=>'3',
                'slug'=>Str::slug('Consumer Electronics & Accessories'),
            ],     [
                'name'=>'Architects, Landscape Architects, Engineers & Surveyors ',
                'parent_id'=>'4',
                'slug'=>Str::slug('Architects, Landscape Architects, Engineers & Surveyors '),
            ],     [
                'name'=>'Blasting & Demolition',
                'parent_id'=>'4',
                'slug'=>Str::slug('Blasting & Demolition'),
            ],     [
                'name'=>'Building Materials & Supplies',
                'parent_id'=>'4',
                'slug'=>Str::slug('Building Materials & Supplies'),
            ],     [
                'name'=>'Construction Companies',
                'parent_id'=>'4',
                'slug'=>Str::slug('Construction Companies'),
            ],     
            [
                'name'=>'Electricians',
                'parent_id'=>'4',
                'slug'=>Str::slug('Electricians'),
            ],     [
                'name'=>'Engineer, Survey',
                'parent_id'=>'4',
                'slug'=>Str::slug('Engineer, Survey'),
            ],     [
                'name'=>'Environmental Assessments',
                'parent_id'=>'4',
                'slug'=>Str::slug('Environmental Assessments'),
            ], [
                'name'=>'Inspectors',
                'parent_id'=>'4',
                'slug'=>Str::slug('Inspectors'),
            ],  [
                'name'=>'Plaster & Concrete',
                'parent_id'=>'4',
                'slug'=>Str::slug('Plaster & Concrete'),
            ],  [
                'name'=>'Plumbers',
                'parent_id'=>'4',
                'slug'=>Str::slug('Plumbers'),
            ],  [
                'name'=>'Roofers',
                'parent_id'=>'4',
                'slug'=>Str::slug('Roofers'),
            ],  [
                'name'=>'Adult & Continuing Education',
                'parent_id'=>'5',
                'slug'=>Str::slug('Adult & Continuing Education'),
            ],  [
                'name'=>'Early Childhood Education',
                'parent_id'=>'5',
                'slug'=>Str::slug('Early Childhood Education'),
            ],  [
                'name'=>'Educational Resources',
                'parent_id'=>'5',
                'slug'=>Str::slug('Educational Resources'),
            ], 
            [
                'name'=>'Other Educational',
                'parent_id'=>'5',
                'slug'=>Str::slug('Other Educational'),
            ], 

            [
                'name'=>'Artists, Writers',
                'parent_id'=>'6',
                'slug'=>Str::slug('Artists, Writers'),
            ],  [
                'name'=>'Event Planners & Supplies',
                'parent_id'=>'6',
                'slug'=>Str::slug('Event Planners & Supplies'),
            ],  [
                'name'=>'Golf Courses',
                'parent_id'=>'6',
                'slug'=>Str::slug('Golf Courses'),
            ],  [
                'name'=>'Movies',
                'parent_id'=>'6',
                'slug'=>Str::slug('Movies'),
            ], 

            [
                'name'=>'Productions',
                'parent_id'=>'6',
                'slug'=>Str::slug('Productions'),
            ], 


            [
                'name'=>'Desserts, Catering & Supplies',
                'parent_id'=>'7',
                'slug'=>Str::slug('Desserts, Catering & Supplies'),
            ],  [
                'name'=>'Fast Food & Carry Out',
                'parent_id'=>'7',
                'slug'=>Str::slug('Fast Food & Carry Out'),
            ],  [
                'name'=>'Grocery, Beverage & Tobacco',
                'parent_id'=>'7',
                'slug'=>Str::slug('Grocery, Beverage & Tobacco'),
            ],  [
                'name'=>'Restaurants',
                'parent_id'=>'7',
                'slug'=>Str::slug('Restaurants'),
            ],   [
                'name'=>'Acupuncture',
                'parent_id'=>'8',
                'slug'=>Str::slug('Acupuncture'),
            ], [
                'name'=>'Assisted Living & Home Health Care',
                'parent_id'=>'8',
                'slug'=>Str::slug('Assisted Living & Home Health Care'),
            ], [
                'name'=>'Audiologist',
                'parent_id'=>'8',
                'slug'=>Str::slug('Audiologist'),
            ], [
                'name'=>'Chiropractic',
                'parent_id'=>'8',
                'slug'=>Str::slug('Chiropractic'),
            ], [
                'name'=>'Clinics & Medical Centers',
                'parent_id'=>'8',
                'slug'=>Str::slug('Clinics & Medical Centers'),
            ], [
                'name'=>'Dental',
                'parent_id'=>'8',
                'slug'=>Str::slug('Dental'),
            ], [
                'name'=>'Diet I& Nutrition',
                'parent_id'=>'8',
                'slug'=>Str::slug('Diet I& Nutrition'),
            ], [
                'name'=>'Laboratory, Imaging & Diagnostic',
                'parent_id'=>'8',
                'slug'=>Str::slug('Laboratory, Imaging & Diagnostic'),
            ], [
                'name'=>'Massage Therapy',
                'parent_id'=>'8',
                'slug'=>Str::slug('Massage Therapy'),
            ], [
                'name'=>'Mental Health',
                'parent_id'=>'8',
                'slug'=>Str::slug('Mental Health'),
            ], [
                'name'=>'Nurse',
                'parent_id'=>'8',
                'slug'=>Str::slug('Nurse'),
            ], [
                'name'=>'Optical',
                'parent_id'=>'8',
                'slug'=>Str::slug('Optical'),
            ], [
                'name'=>'Pharmacy, Drug & Vitamin Stores',
                'parent_id'=>'8',
                'slug'=>Str::slug('Pharmacy, Drug & Vitamin Stores'),
            ], [
                'name'=>'Physical Therapy',
                'parent_id'=>'8',
                'slug'=>Str::slug('Physical Therapy'),
            ], [
                'name'=>'Physicians & Assistants',
                'parent_id'=>'8',
                'slug'=>Str::slug('Physicians & Assistants'),
            ], [
                'name'=>'Podiatry',
                'parent_id'=>'8',
                'slug'=>Str::slug('Podiatry'),
            ], [
                'name'=>'Social Worker',
                'parent_id'=>'8',
                'slug'=>Str::slug('Social Worker'),
            ], [
                'name'=>'Animal Hospital',
                'parent_id'=>'8',
                'slug'=>Str::slug('Animal Hospital'),
            ], [
                'name'=>'Veterinary & Animal Surgeons',
                'parent_id'=>'8',
                'slug'=>Str::slug('Veterinary & Animal Surgeons'),
            ], [
                'name'=>'Antiques & Collectibles',
                'parent_id'=>'9',
                'slug'=>Str::slug('Antiques & Collectibles'),
            ], [
                'name'=>'Cleaning',
                'parent_id'=>'9',
                'slug'=>Str::slug('Cleaning'),
            ], [
                'name'=>'Crafts, Hobbies & Sports',
                'parent_id'=>'9',
                'slug'=>Str::slug('Crafts, Hobbies & Sports'),
            ], [
                'name'=>'Flower Shops',
                'parent_id'=>'9',
                'slug'=>Str::slug('Flower Shops'),
            ], [
                'name'=>'Home Furnishings',
                'parent_id'=>'9',
                'slug'=>Str::slug('Home Furnishings'),
            ], [
                'name'=>'Home Goods',
                'parent_id'=>'9',
                'slug'=>Str::slug('Home Goods'),
            ], [
                'name'=>'Home Improvements & Repairs',
                'parent_id'=>'9',
                'slug'=>Str::slug('Home Improvements & Repairs'),
            ], [
                'name'=>'Landscape & Lawn Service',
                'parent_id'=>'9',
                'slug'=>Str::slug('Landscape & Lawn Service'),
            ], [
                'name'=>'Pest Control',
                'parent_id'=>'9',
                'slug'=>Str::slug('Pest Control'),
            ], [
                'name'=>'Pool Supplies & Service',
                'parent_id'=>'9',
                'slug'=>Str::slug('Pool Supplies & Service'),
            ], [
                'name'=>'Security System & Services',
                'parent_id'=>'9',
                'slug'=>Str::slug('Security System & Services'),
            ], [
                'name'=>'Accountants',
                'parent_id'=>'10',
                'slug'=>Str::slug('Accountants'),
            ], [
                'name'=>'Attorneys',
                'parent_id'=>'10',
                'slug'=>Str::slug('Attorneys'),
            ], [
                'name'=>'Financial Institutions',
                'parent_id'=>'10',
                'slug'=>Str::slug('Financial Institutions'),
            ], [
                'name'=>'Financial Services',
                'parent_id'=>'10',
                'slug'=>Str::slug('Financial Services'),
            ],
            [
                'name'=>'Insurance',
                'parent_id'=>'10',
                'slug'=>Str::slug('Insurance'),
            ], 
            [
                'name'=>'Other Legal',
                'parent_id'=>'10',
                'slug'=>Str::slug('Other Legal'),
            ], [
                'name'=>'Distribution, Import/Export',
                'parent_id'=>'11',
                'slug'=>Str::slug('Distribution, Import/Export'),
            ], [
                'name'=>'Manufacturing',
                'parent_id'=>'11',
                'slug'=>Str::slug('Manufacturing'),
            ], [
                'name'=>'Wholesale',
                'parent_id'=>'11',
                'slug'=>Str::slug('Wholesale'),
            ], [
                'name'=>'Cards & Gifts',
                'parent_id'=>'12',
                'slug'=>Str::slug('Cards & Gifts'),
            ], [
                'name'=>'Clothing & Accessories',
                'parent_id'=>'12',
                'slug'=>Str::slug('Clothing & Accessories'),
            ], [
                'name'=>'Department Stores, Sporting Goods',
                'parent_id'=>'12',
                'slug'=>Str::slug('Department Stores, Sporting Goods'),
            ], [
                'name'=>'General',
                'parent_id'=>'12',
                'slug'=>Str::slug('General'),
            ], [
                'name'=>'Jewelry',
                'parent_id'=>'12',
                'slug'=>Str::slug('Jewelry'),
            ], [
                'name'=>'Shoes',
                'parent_id'=>'12',
                'slug'=>Str::slug('Shoes'),
            ], [
                'name'=>'Civic Groups',
                'parent_id'=>'13',
                'slug'=>Str::slug('Civic Groups'),
            ], [
                'name'=>'Funeral Service Providers & Cemetaries',
                'parent_id'=>'13',
                'slug'=>Str::slug('Funeral Service Providers & Cemetaries'),
            ], [
                'name'=>'Miscellaneous',
                'parent_id'=>'13',
                'slug'=>Str::slug('Miscellaneous'),
            ], [
                'name'=>'Utility Companies',
                'parent_id'=>'13',
                'slug'=>Str::slug('Utility Companies'),
            ], [
                'name'=>'Animal Care & Supplies',
                'parent_id'=>'14',
                'slug'=>Str::slug('Animal Care & Supplies'),
            ], [
                'name'=>'Barber & Beauty Salons',
                'parent_id'=>'14',
                'slug'=>Str::slug('Barber & Beauty Salons'),
            ], [
                'name'=>'Beauty Supplies',
                'parent_id'=>'14',
                'slug'=>Str::slug('Beauty Supplies'),
            ], [
                'name'=>'Dry Cleaners & Laundromats',
                'parent_id'=>'14',
                'slug'=>Str::slug('Dry Cleaners & Laundromats'),
            ], [
                'name'=>'Exercise & Fitness',
                'parent_id'=>'14',
                'slug'=>Str::slug('Exercise & Fitness'),
            ], [
                'name'=>'Massage & Body Works',
                'parent_id'=>'14',
                'slug'=>Str::slug('Massage & Body Works'),
            ],
            [
                'name'=>'Nail Salons',
                'parent_id'=>'14',
                'slug'=>Str::slug('Nail Salons'),
            ], [
                'name'=>'Shoe Repairs',
                'parent_id'=>'14',
                'slug'=>Str::slug('Shoe Repairs'),
            ], [
                'name'=>'Tailors',
                'parent_id'=>'14',
                'slug'=>Str::slug('Tailors'),
            ], [
                'name'=>'Agencies & Brokerage',
                'parent_id'=>'15',
                'slug'=>Str::slug('Agencies & Brokerage'),
            ], [
                'name'=>'Agents & Brokers',
                'parent_id'=>'15',
                'slug'=>Str::slug('Agents & Brokers'),
            ], [
                'name'=>'Apartment & Home Rental',
                'parent_id'=>'15',
                'slug'=>Str::slug('Apartment & Home Rental'),
            ], [
                'name'=>'Mortgage Broker & Lender',
                'parent_id'=>'15',
                'slug'=>Str::slug('Mortgage Broker & Lender'),
            ], [
                'name'=>'Property Management',
                'parent_id'=>'15',
                'slug'=>Str::slug('Property Management'),
            ], [
                'name'=>'Title Company',
                'parent_id'=>'15',
                'slug'=>Str::slug('Title Company'),
            ], [
                'name'=>'Hotel, Motel & Extended Stay',
                'parent_id'=>'16',
                'slug'=>Str::slug('Hotel, Motel & Extended Stay'),
            ], [
                'name'=>'Moving & Storage',
                'parent_id'=>'16',
                'slug'=>Str::slug('Moving & Storage'),
            ], [
                'name'=>'Packaging & Shipping',
                'parent_id'=>'16',
                'slug'=>Str::slug('Packaging & Shipping'),
            ], [
                'name'=>'Transportation',
                'parent_id'=>'16',
                'slug'=>Str::slug('Transportation'),
            ], [
                'name'=>'Travel & Tourism',
                'parent_id'=>'16',
                'slug'=>Str::slug('Travel & Tourism'),
            ]
            ];
            businessCategory::insert($bc);
    }
}