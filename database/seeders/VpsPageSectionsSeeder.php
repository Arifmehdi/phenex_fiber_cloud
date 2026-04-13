<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Pricing;
use App\Models\Section;
use App\Models\SectionSetup;
use App\Models\SubTitle;
use App\Models\Title;
use Illuminate\Database\Seeder;

class VpsPageSectionsSeeder extends Seeder
{
    public function run()
    {
        $vpsPage = Section::where('page', 'vps')->first();
        if (!$vpsPage) {
            $vpsPage = Section::create([
                'section_name' => 'VPS Page',
                'template' => 'page',
                'status' => 1,
                'serial' => 1,
                'page' => 'vps'
            ]);
        }

        // Section 1: Hero VPS
        $heroSection = Section::create([
            'section_name' => 'VPS Hero Section',
            'template' => 'hero',
            'status' => 1,
            'serial' => 1,
            'page' => 'vps-hero',
            'side_note' => 'Hero section for VPS page'
        ]);

        $heroTitle = Title::create([
            'title' => 'High-Performance Cloud VPS',
            'side_note' => 'Main hero title'
        ]);

        $heroSubTitle = SubTitle::create([
            'title' => 'Reliable VPS hosting with dedicated resources, low-latency local infrastructure, and 24/7 support.',
            'side_note' => 'Hero subtitle'
        ]);

        $heroContent = Content::create([
            'name' => 'vps-hero-banner',
            'content' => 'All plans include full root access, weekly backups, unlimited bandwidth & 24/7 support',
            'side_note' => 'Banner text showing features included',
            'accent_color' => '#4F46E5',
            'icon' => 'check',
            'button_text' => 'Get Started',
            'button_link' => '#pricing'
        ]);

        SectionSetup::create([
            'section_id' => $heroSection->id,
            'title_id' => $heroTitle->id,
            'sub_title_id' => $heroSubTitle->id,
            'content_id' => $heroContent->id,
            'side_note' => 'Hero section setup',
            'active' => 1
        ]);

        // Section 2: Pricing Cards
        $pricingSection = Section::create([
            'section_name' => 'VPS Pricing Section',
            'template' => 'pricing-grid',
            'status' => 1,
            'serial' => 2,
            'page' => 'vps-pricing',
            'side_note' => 'Pricing cards section for VPS'
        ]);

        $pricingTitle = Title::create([
            'title' => 'Choose Your VPS Plan',
            'side_note' => 'Pricing section title'
        ]);

        $pricingSubTitle = SubTitle::create([
            'title' => 'Scalable resources for your business needs',
            'side_note' => 'Pricing section subtitle'
        ]);

        // Create Content for header
        $pricingHeaderContent = Content::create([
            'name' => 'pricing-header',
            'content' => 'Select the perfect VPS plan for your needs',
            'side_note' => 'Pricing header content'
        ]);

        // Pricing 1: Starter VPS
        $starterPricing = Pricing::create([
            'section_id' => $pricingSection->id,
            'price' => '999',
            'currency' => '৳',
            'side_note' => json_encode([
                'name' => 'Starter VPS',
                'description' => 'Starter businesses or students',
                'period' => '/month',
                'features' => [
                    '2 vCPU',
                    '2 GB RAM',
                    '80 GB SSD',
                    'Any Linux OS',
                    '1 Dedicated IP'
                ],
                'is_featured' => false,
                'badge' => null
            ])
        ]);

        // Pricing 2: Standard VPS
        $standardPricing = Pricing::create([
            'section_id' => $pricingSection->id,
            'price' => '1600',
            'currency' => '৳',
            'side_note' => json_encode([
                'name' => 'Standard VPS',
                'description' => 'Small & medium businesses',
                'period' => '/month',
                'features' => [
                    '4 vCPU',
                    '8 GB RAM',
                    '160 GB SSD',
                    'Any Linux OS',
                    '1 Dedicated IP'
                ],
                'is_featured' => false,
                'badge' => null
            ])
        ]);

        // Pricing 3: Advance VPS
        $advancePricing = Pricing::create([
            'section_id' => $pricingSection->id,
            'price' => '2600',
            'currency' => '৳',
            'side_note' => json_encode([
                'name' => 'Advance VPS',
                'description' => 'Power users & growing businesses',
                'period' => '/year',
                'features' => [
                    '8 vCPU',
                    '16 GB RAM',
                    '350 GB SSD',
                    'Any Linux OS',
                    '1 Dedicated IP'
                ],
                'is_featured' => true,
                'badge' => 'BEST VALUE'
            ])
        ]);

        // Pricing 4: Windows VPS
        $windowsPricing = Pricing::create([
            'section_id' => $pricingSection->id,
            'price' => '1400',
            'currency' => '৳',
            'side_note' => json_encode([
                'name' => 'Windows VPS',
                'description' => 'Windows OS with RDP access',
                'period' => '/month',
                'features' => [
                    '4 vCPU',
                    '8 GB RAM',
                    '200 GB SSD',
                    'Any Windows OS',
                    'Full Admin & RDP'
                ],
                'is_featured' => false,
                'badge' => null
            ])
        ]);

        // Use content_id to store the pricing IDs as JSON
        $pricingContent = Content::create([
            'name' => 'vps-pricing-cards',
            'content' => json_encode([
                $starterPricing->id,
                $standardPricing->id,
                $advancePricing->id,
                $windowsPricing->id
            ]),
            'side_note' => 'Pricing card IDs'
        ]);

        SectionSetup::create([
            'section_id' => $pricingSection->id,
            'title_id' => $pricingTitle->id,
            'sub_title_id' => $pricingSubTitle->id,
            'content_id' => $pricingContent->id,
            'pricing_id' => $starterPricing->id,
            'side_note' => 'Pricing section setup',
            'active' => 1
        ]);

        // Section 3: CTA Talk to Our Team
        $ctaSection = Section::create([
            'section_name' => 'VPS CTA Section',
            'template' => 'cta',
            'status' => 1,
            'serial' => 3,
            'page' => 'vps-cta',
            'side_note' => 'CTA section for VPS'
        ]);

        $ctaTitle = Title::create([
            'title' => 'Talk to Our Team',
            'side_note' => 'CTA title'
        ]);

        $ctaSubTitle = SubTitle::create([
            'title' => 'Need help choosing the right VPS plan? We\'re here to help.',
            'side_note' => 'CTA subtitle'
        ]);

        $ctaContent = Content::create([
            'name' => 'vps-cta-button',
            'content' => 'Contact Us',
            'side_note' => 'CTA button text',
            'button_text' => 'Contact Us',
            'button_link' => '/contact'
        ]);

        SectionSetup::create([
            'section_id' => $ctaSection->id,
            'title_id' => $ctaTitle->id,
            'sub_title_id' => $ctaSubTitle->id,
            'content_id' => $ctaContent->id,
            'side_note' => 'CTA section setup',
            'active' => 1
        ]);

        echo "VPS Page sections seeded successfully!\n";
    }
}