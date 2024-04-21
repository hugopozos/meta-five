<?php

namespace AleeDhillon\MetaFive\Entities;

/**
 * Class Client
 * @package AleeDhillon\MetaFive\Entities
 */
class Client
{
    /**
     * @return mixed
     */
    public function getClientStatus()
    {
        return $this->client_status;
    }

    /**
     * @param mixed $client_status
     */
    public function setClientStatus($client_status): void
    {
        $this->client_status = $client_status;
    }
    protected $record_id;
    protected $client_type;
    protected $client_status;
    protected $client_external_id;
    protected $assigned_manager;
    protected $date_created;
    protected $date_updated;
    protected $comment;
    protected $compliance_approved_by;
    protected $compliance_client_category;
    protected $compliance_date_approval;
    protected $compliance_date_termination;
    protected $lead_campaign;
    protected $lead_source;
    protected $introducer;
    protected $person_title;
    protected $person_name;
    protected $person_middle_name;
    protected $person_last_name;
    protected $person_birth_date;
    protected $person_citizenship;
    protected $person_gender;
    protected $person_tax_id;
    protected $person_document_type;
    protected $person_document_number;
    protected $person_document_date;
    protected $person_document_expiration;
    protected $person_document_extra;
    protected $person_employment;
    protected $person_industry;
    protected $person_education;
    protected $person_wealth_source;
    protected $person_annual_income;
    protected $person_net_worth;
    protected $person_annual_deposit;
    protected $company_name;
    protected $company_reg_number;
    protected $company_reg_date;
    protected $company_reg_authority;
    protected $company_vat;
    protected $company_lei;
    protected $company_license_number;
    protected $company_license_authority;
    protected $company_country;
    protected $company_address;
    protected $company_website;
    protected $contact_preferred;
    protected $contact_language;
    protected $contact_email;
    protected $contact_phone;
    protected $contact_messengers;
    protected $contact_social_networks;
    protected $contact_last_date;
    protected $address_country;
    protected $address_postcode;
    protected $address_street;
    protected $address_state;
    protected $address_city;
    protected $experience_fx;
    protected $experience_cfd;
    protected $experience_futures;
    protected $experience_stocks;
    protected $trading_group;
    protected $client_origin;
    protected $client_origin_login;
    protected $kyc_applicant_sumsub;

    /**
     * @return mixed
     */
    public function getRecordId()
    {
        return $this->record_id;
    }

    /**
     * @param mixed $record_id
     */
    public function setRecordId($record_id): void
    {
        $this->record_id = $record_id;
    }

    /**
     * @return mixed
     */
    public function getClientType()
    {
        return $this->client_type;
    }

    /**
     * @param mixed $client_type
     */
    public function setClientType($client_type): void
    {
        $this->client_type = $client_type;
    }

    /**
     * @return mixed
     */
    public function getClientExternalId()
    {
        return $this->client_external_id;
    }

    /**
     * @param mixed $client_external_id
     */
    public function setClientExternalId($client_external_id): void
    {
        $this->client_external_id = $client_external_id;
    }

    /**
     * @return mixed
     */
    public function getAssignedManager()
    {
        return $this->assigned_manager;
    }

    /**
     * @param mixed $assigned_manager
     */
    public function setAssignedManager($assigned_manager): void
    {
        $this->assigned_manager = $assigned_manager;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * @param mixed $date_created
     */
    public function setDateCreated($date_created): void
    {
        $this->date_created = $date_created;
    }

    /**
     * @return mixed
     */
    public function getDateUpdated()
    {
        return $this->date_updated;
    }

    /**
     * @param mixed $date_updated
     */
    public function setDateUpdated($date_updated): void
    {
        $this->date_updated = $date_updated;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getComplianceApprovedBy()
    {
        return $this->compliance_approved_by;
    }

    /**
     * @param mixed $compliance_approved_by
     */
    public function setComplianceApprovedBy($compliance_approved_by): void
    {
        $this->compliance_approved_by = $compliance_approved_by;
    }

    /**
     * @return mixed
     */
    public function getComplianceClientCategory()
    {
        return $this->compliance_client_category;
    }

    /**
     * @param mixed $compliance_client_category
     */
    public function setComplianceClientCategory($compliance_client_category): void
    {
        $this->compliance_client_category = $compliance_client_category;
    }

    /**
     * @return mixed
     */
    public function getComplianceDateApproval()
    {
        return $this->compliance_date_approval;
    }

    /**
     * @param mixed $compliance_date_approval
     */
    public function setComplianceDateApproval($compliance_date_approval): void
    {
        $this->compliance_date_approval = $compliance_date_approval;
    }

    /**
     * @return mixed
     */
    public function getComplianceDateTermination()
    {
        return $this->compliance_date_termination;
    }

    /**
     * @param mixed $compliance_date_termination
     */
    public function setComplianceDateTermination($compliance_date_termination): void
    {
        $this->compliance_date_termination = $compliance_date_termination;
    }

    /**
     * @return mixed
     */
    public function getLeadCampaign()
    {
        return $this->lead_campaign;
    }

    /**
     * @param mixed $lead_campaign
     */
    public function setLeadCampaign($lead_campaign): void
    {
        $this->lead_campaign = $lead_campaign;
    }

    /**
     * @return mixed
     */
    public function getLeadSource()
    {
        return $this->lead_source;
    }

    /**
     * @param mixed $lead_source
     */
    public function setLeadSource($lead_source): void
    {
        $this->lead_source = $lead_source;
    }

    /**
     * @return mixed
     */
    public function getIntroducer()
    {
        return $this->introducer;
    }

    /**
     * @param mixed $introducer
     */
    public function setIntroducer($introducer): void
    {
        $this->introducer = $introducer;
    }

    /**
     * @return mixed
     */
    public function getPersonTitle()
    {
        return $this->person_title;
    }

    /**
     * @param mixed $person_title
     */
    public function setPersonTitle($person_title): void
    {
        $this->person_title = $person_title;
    }

    /**
     * @return mixed
     */
    public function getPersonName()
    {
        return $this->person_name;
    }

    /**
     * @param mixed $person_name
     */
    public function setPersonName($person_name): void
    {
        $this->person_name = $person_name;
    }

    /**
     * @return mixed
     */
    public function getPersonMiddleName()
    {
        return $this->person_middle_name;
    }

    /**
     * @param mixed $person_middle_name
     */
    public function setPersonMiddleName($person_middle_name): void
    {
        $this->person_middle_name = $person_middle_name;
    }

    /**
     * @return mixed
     */
    public function getPersonLastName()
    {
        return $this->person_last_name;
    }

    /**
     * @param mixed $person_last_name
     */
    public function setPersonLastName($person_last_name): void
    {
        $this->person_last_name = $person_last_name;
    }

    /**
     * @return mixed
     */
    public function getPersonBirthDate()
    {
        return $this->person_birth_date;
    }

    /**
     * @param mixed $person_birth_date
     */
    public function setPersonBirthDate($person_birth_date): void
    {
        $this->person_birth_date = $person_birth_date;
    }

    /**
     * @return mixed
     */
    public function getPersonCitizenship()
    {
        return $this->person_citizenship;
    }

    /**
     * @param mixed $person_citizenship
     */
    public function setPersonCitizenship($person_citizenship): void
    {
        $this->person_citizenship = $person_citizenship;
    }

    /**
     * @return mixed
     */
    public function getPersonGender()
    {
        return $this->person_gender;
    }

    /**
     * @param mixed $person_gender
     */
    public function setPersonGender($person_gender): void
    {
        $this->person_gender = $person_gender;
    }

    /**
     * @return mixed
     */
    public function getPersonTaxId()
    {
        return $this->person_tax_id;
    }

    /**
     * @param mixed $person_tax_id
     */
    public function setPersonTaxId($person_tax_id): void
    {
        $this->person_tax_id = $person_tax_id;
    }

    /**
     * @return mixed
     */
    public function getPersonDocumentType()
    {
        return $this->person_document_type;
    }

    /**
     * @param mixed $person_document_type
     */
    public function setPersonDocumentType($person_document_type): void
    {
        $this->person_document_type = $person_document_type;
    }

    /**
     * @return mixed
     */
    public function getPersonDocumentNumber()
    {
        return $this->person_document_number;
    }

    /**
     * @param mixed $person_document_number
     */
    public function setPersonDocumentNumber($person_document_number): void
    {
        $this->person_document_number = $person_document_number;
    }

    /**
     * @return mixed
     */
    public function getPersonDocumentDate()
    {
        return $this->person_document_date;
    }

    /**
     * @param mixed $person_document_date
     */
    public function setPersonDocumentDate($person_document_date): void
    {
        $this->person_document_date = $person_document_date;
    }

    /**
     * @return mixed
     */
    public function getPersonDocumentExpiration()
    {
        return $this->person_document_expiration;
    }

    /**
     * @param mixed $person_document_expiration
     */
    public function setPersonDocumentExpiration($person_document_expiration): void
    {
        $this->person_document_expiration = $person_document_expiration;
    }

    /**
     * @return mixed
     */
    public function getPersonDocumentExtra()
    {
        return $this->person_document_extra;
    }

    /**
     * @param mixed $person_document_extra
     */
    public function setPersonDocumentExtra($person_document_extra): void
    {
        $this->person_document_extra = $person_document_extra;
    }

    /**
     * @return mixed
     */
    public function getPersonEmployment()
    {
        return $this->person_employment;
    }

    /**
     * @param mixed $person_employment
     */
    public function setPersonEmployment($person_employment): void
    {
        $this->person_employment = $person_employment;
    }

    /**
     * @return mixed
     */
    public function getPersonIndustry()
    {
        return $this->person_industry;
    }

    /**
     * @param mixed $person_industry
     */
    public function setPersonIndustry($person_industry): void
    {
        $this->person_industry = $person_industry;
    }

    /**
     * @return mixed
     */
    public function getPersonEducation()
    {
        return $this->person_education;
    }

    /**
     * @param mixed $person_education
     */
    public function setPersonEducation($person_education): void
    {
        $this->person_education = $person_education;
    }

    /**
     * @return mixed
     */
    public function getPersonWealthSource()
    {
        return $this->person_wealth_source;
    }

    /**
     * @param mixed $person_wealth_source
     */
    public function setPersonWealthSource($person_wealth_source): void
    {
        $this->person_wealth_source = $person_wealth_source;
    }

    /**
     * @return mixed
     */
    public function getPersonAnnualIncome()
    {
        return $this->person_annual_income;
    }

    /**
     * @param mixed $person_annual_income
     */
    public function setPersonAnnualIncome($person_annual_income): void
    {
        $this->person_annual_income = $person_annual_income;
    }

    /**
     * @return mixed
     */
    public function getPersonNetWorth()
    {
        return $this->person_net_worth;
    }

    /**
     * @param mixed $person_net_worth
     */
    public function setPersonNetWorth($person_net_worth): void
    {
        $this->person_net_worth = $person_net_worth;
    }

    /**
     * @return mixed
     */
    public function getPersonAnnualDeposit()
    {
        return $this->person_annual_deposit;
    }

    /**
     * @param mixed $person_annual_deposit
     */
    public function setPersonAnnualDeposit($person_annual_deposit): void
    {
        $this->person_annual_deposit = $person_annual_deposit;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @param mixed $company_name
     */
    public function setCompanyName($company_name): void
    {
        $this->company_name = $company_name;
    }

    /**
     * @return mixed
     */
    public function getCompanyRegNumber()
    {
        return $this->company_reg_number;
    }

    /**
     * @param mixed $company_reg_number
     */
    public function setCompanyRegNumber($company_reg_number): void
    {
        $this->company_reg_number = $company_reg_number;
    }

    /**
     * @return mixed
     */
    public function getCompanyRegDate()
    {
        return $this->company_reg_date;
    }

    /**
     * @param mixed $company_reg_date
     */
    public function setCompanyRegDate($company_reg_date): void
    {
        $this->company_reg_date = $company_reg_date;
    }

    /**
     * @return mixed
     */
    public function getCompanyRegAuthority()
    {
        return $this->company_reg_authority;
    }

    /**
     * @param mixed $company_reg_authority
     */
    public function setCompanyRegAuthority($company_reg_authority): void
    {
        $this->company_reg_authority = $company_reg_authority;
    }

    /**
     * @return mixed
     */
    public function getCompanyVat()
    {
        return $this->company_vat;
    }

    /**
     * @param mixed $company_vat
     */
    public function setCompanyVat($company_vat): void
    {
        $this->company_vat = $company_vat;
    }

    /**
     * @return mixed
     */
    public function getCompanyLei()
    {
        return $this->company_lei;
    }

    /**
     * @param mixed $company_lei
     */
    public function setCompanyLei($company_lei): void
    {
        $this->company_lei = $company_lei;
    }

    /**
     * @return mixed
     */
    public function getCompanyLicenseNumber()
    {
        return $this->company_license_number;
    }

    /**
     * @param mixed $company_license_number
     */
    public function setCompanyLicenseNumber($company_license_number): void
    {
        $this->company_license_number = $company_license_number;
    }

    /**
     * @return mixed
     */
    public function getCompanyLicenseAuthority()
    {
        return $this->company_license_authority;
    }

    /**
     * @param mixed $company_license_authority
     */
    public function setCompanyLicenseAuthority($company_license_authority): void
    {
        $this->company_license_authority = $company_license_authority;
    }

    /**
     * @return mixed
     */
    public function getCompanyCountry()
    {
        return $this->company_country;
    }

    /**
     * @param mixed $company_country
     */
    public function setCompanyCountry($company_country): void
    {
        $this->company_country = $company_country;
    }

    /**
     * @return mixed
     */
    public function getCompanyAddress()
    {
        return $this->company_address;
    }

    /**
     * @param mixed $company_address
     */
    public function setCompanyAddress($company_address): void
    {
        $this->company_address = $company_address;
    }

    /**
     * @return mixed
     */
    public function getCompanyWebsite()
    {
        return $this->company_website;
    }

    /**
     * @param mixed $company_website
     */
    public function setCompanyWebsite($company_website): void
    {
        $this->company_website = $company_website;
    }

    /**
     * @return mixed
     */
    public function getContactPreferred()
    {
        return $this->contact_preferred;
    }

    /**
     * @param mixed $contact_preferred
     */
    public function setContactPreferred($contact_preferred): void
    {
        $this->contact_preferred = $contact_preferred;
    }

    /**
     * @return mixed
     */
    public function getContactLanguage()
    {
        return $this->contact_language;
    }

    /**
     * @param mixed $contact_language
     */
    public function setContactLanguage($contact_language): void
    {
        $this->contact_language = $contact_language;
    }

    /**
     * @return mixed
     */
    public function getContactEmail()
    {
        return $this->contact_email;
    }

    /**
     * @param mixed $contact_email
     */
    public function setContactEmail($contact_email): void
    {
        $this->contact_email = $contact_email;
    }

    /**
     * @return mixed
     */
    public function getContactPhone()
    {
        return $this->contact_phone;
    }

    /**
     * @param mixed $contact_phone
     */
    public function setContactPhone($contact_phone): void
    {
        $this->contact_phone = $contact_phone;
    }

    /**
     * @return mixed
     */
    public function getContactMessengers()
    {
        return $this->contact_messengers;
    }

    /**
     * @param mixed $contact_messengers
     */
    public function setContactMessengers($contact_messengers): void
    {
        $this->contact_messengers = $contact_messengers;
    }

    /**
     * @return mixed
     */
    public function getContactSocialNetworks()
    {
        return $this->contact_social_networks;
    }

    /**
     * @param mixed $contact_social_networks
     */
    public function setContactSocialNetworks($contact_social_networks): void
    {
        $this->contact_social_networks = $contact_social_networks;
    }

    /**
     * @return mixed
     */
    public function getContactLastDate()
    {
        return $this->contact_last_date;
    }

    /**
     * @param mixed $contact_last_date
     */
    public function setContactLastDate($contact_last_date): void
    {
        $this->contact_last_date = $contact_last_date;
    }

    /**
     * @return mixed
     */
    public function getAddressCountry()
    {
        return $this->address_country;
    }

    /**
     * @param mixed $address_country
     */
    public function setAddressCountry($address_country): void
    {
        $this->address_country = $address_country;
    }

    /**
     * @return mixed
     */
    public function getAddressPostcode()
    {
        return $this->address_postcode;
    }

    /**
     * @param mixed $address_postcode
     */
    public function setAddressPostcode($address_postcode): void
    {
        $this->address_postcode = $address_postcode;
    }

    /**
     * @return mixed
     */
    public function getAddressStreet()
    {
        return $this->address_street;
    }

    /**
     * @param mixed $address_street
     */
    public function setAddressStreet($address_street): void
    {
        $this->address_street = $address_street;
    }

    /**
     * @return mixed
     */
    public function getAddressState()
    {
        return $this->address_state;
    }

    /**
     * @param mixed $address_state
     */
    public function setAddressState($address_state): void
    {
        $this->address_state = $address_state;
    }

    /**
     * @return mixed
     */
    public function getAddressCity()
    {
        return $this->address_city;
    }

    /**
     * @param mixed $address_city
     */
    public function setAddressCity($address_city): void
    {
        $this->address_city = $address_city;
    }

    /**
     * @return mixed
     */
    public function getExperienceFx()
    {
        return $this->experience_fx;
    }

    /**
     * @param mixed $experience_fx
     */
    public function setExperienceFx($experience_fx): void
    {
        $this->experience_fx = $experience_fx;
    }

    /**
     * @return mixed
     */
    public function getExperienceCfd()
    {
        return $this->experience_cfd;
    }

    /**
     * @param mixed $experience_cfd
     */
    public function setExperienceCfd($experience_cfd): void
    {
        $this->experience_cfd = $experience_cfd;
    }

    /**
     * @return mixed
     */
    public function getExperienceFutures()
    {
        return $this->experience_futures;
    }

    /**
     * @param mixed $experience_futures
     */
    public function setExperienceFutures($experience_futures): void
    {
        $this->experience_futures = $experience_futures;
    }

    /**
     * @return mixed
     */
    public function getExperienceStocks()
    {
        return $this->experience_stocks;
    }

    /**
     * @param mixed $experience_stocks
     */
    public function setExperienceStocks($experience_stocks): void
    {
        $this->experience_stocks = $experience_stocks;
    }

    /**
     * @return mixed
     */
    public function getTradingGroup()
    {
        return $this->trading_group;
    }

    /**
     * @param mixed $trading_group
     */
    public function setTradingGroup($trading_group): void
    {
        $this->trading_group = $trading_group;
    }

    /**
     * @return mixed
     */
    public function getClientOrigin()
    {
        return $this->client_origin;
    }

    /**
     * @param mixed $client_origin
     */
    public function setClientOrigin($client_origin): void
    {
        $this->client_origin = $client_origin;
    }

    /**
     * @return mixed
     */
    public function getClientOriginLogin()
    {
        return $this->client_origin_login;
    }

    /**
     * @param mixed $client_origin_login
     */
    public function setClientOriginLogin($client_origin_login): void
    {
        $this->client_origin_login = $client_origin_login;
    }

    /**
     * @return mixed
     */
    public function getKycApplicantSumsub()
    {
        return $this->kyc_applicant_sumsub;
    }

    /**
     * @param mixed $kyc_applicant_sumsub
     */
    public function setKycApplicantSumsub($kyc_applicant_sumsub): void
    {
        $this->kyc_applicant_sumsub = $kyc_applicant_sumsub;
    }


}
