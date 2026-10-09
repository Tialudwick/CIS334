<?php
declare(strict_types=1);

namespace App\Exercises\Class6;

class VCFController extends Controller
{
    public function download(): void
    {
       
        $vcardContent = $this->twig->render('vcard.vcf.twig', [
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'company' => 'Acme Corp.',
            'job-title' => 'Lead Developer',
            'email' => 'jane.doe@example.com',
            'phone' => '+1-555-123-4567',
            'website' => 'https://example.com'
        ]);

        header('Content-Type: text/vcard; charset=utf-8');
        header('Content-Disposition: attachment; filename="contact.vcf"');
        header('Content-Length: ' . (string) strlen($vcardContent));

        echo $vcardContent;
    }
}